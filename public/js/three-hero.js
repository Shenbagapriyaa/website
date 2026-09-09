/**
 * Track Tech Solution - 3D Holographic Telemetry & Laser Loom Visualizer
 * Replaced blocky meshes with intricate cyber wireframes & fiber laser rings
 */

(function() {
  'use strict';

  const container = document.getElementById('three-hero-container');
  if (!container || typeof THREE === 'undefined') return;

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
  camera.position.set(0, 4, 14);
  camera.lookAt(0, 0, 0);

  const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  container.appendChild(renderer.domElement);

  const mainGroup = new THREE.Group();
  scene.add(mainGroup);

  // Lighting
  const ambientLight = new THREE.AmbientLight(0x0f172a, 3);
  scene.add(ambientLight);

  const cyanLight = new THREE.PointLight(0x00f0ff, 4, 25);
  cyanLight.position.set(4, 5, 4);
  scene.add(cyanLight);

  // 1. Sleek 3D Holographic Fiber Core (Thin Wireframe Sphere with Internal Core)
  const coreGeo = new THREE.IcosahedronGeometry(2.4, 2);
  const coreMat = new THREE.MeshBasicMaterial({
    color: 0x00f0ff,
    wireframe: true,
    transparent: true,
    opacity: 0.5
  });
  const coreMesh = new THREE.Mesh(coreGeo, coreMat);
  mainGroup.add(coreMesh);

  const innerGeo = new THREE.OctahedronGeometry(1.2, 1);
  const innerMat = new THREE.MeshBasicMaterial({
    color: 0x3b82f6,
    wireframe: true,
    transparent: true,
    opacity: 0.7
  });
  const innerMesh = new THREE.Mesh(innerGeo, innerMat);
  mainGroup.add(innerMesh);

  // 2. Multi-Axis Laser Scanning Rings
  const rings = [];
  const ringColors = [0x00f0ff, 0x3b82f6, 0xa855f7, 0x10b981];

  for (let r = 0; r < 4; r++) {
    const ringGeo = new THREE.TorusGeometry(3.5 + r * 0.6, 0.02, 16, 120);
    const ringMat = new THREE.MeshBasicMaterial({
      color: ringColors[r],
      transparent: true,
      opacity: 0.6,
      blending: THREE.AdditiveBlending
    });
    const ringMesh = new THREE.Mesh(ringGeo, ringMat);
    ringMesh.rotation.x = (r * Math.PI) / 4;
    ringMesh.rotation.y = (r * Math.PI) / 6;
    mainGroup.add(ringMesh);
    rings.push({ mesh: ringMesh, rotSpeed: 0.008 + r * 0.004, dir: r % 2 === 0 ? 1 : -1 });
  }

  // 3. Intricate 3D Laser Splines (Veins flowing through the hero core)
  const splineCount = 8;
  const splineLines = [];

  for (let s = 0; s < splineCount; s++) {
    const angle = (s / splineCount) * Math.PI * 2;
    const curvePoints = [
      new THREE.Vector3(Math.cos(angle) * 4.5, -2, Math.sin(angle) * 4.5),
      new THREE.Vector3(Math.cos(angle + 0.5) * 2, 0, Math.sin(angle + 0.5) * 2),
      new THREE.Vector3(Math.cos(angle) * 1, 1.5, Math.sin(angle) * 1),
      new THREE.Vector3(0, 3, 0)
    ];
    const curve = new THREE.CatmullRomCurve3(curvePoints);
    const curveGeo = new THREE.BufferGeometry().setFromPoints(curve.getPoints(50));
    const curveMat = new THREE.LineBasicMaterial({
      color: ringColors[s % ringColors.length],
      transparent: true,
      opacity: 0.5,
      blending: THREE.AdditiveBlending
    });
    const line = new THREE.Line(curveGeo, curveMat);
    mainGroup.add(line);
    splineLines.push({ line, curvePoints, initialAngle: angle });
  }

  // Parallax & Mouse
  let mouseX = 0;
  let mouseY = 0;

  window.addEventListener('mousemove', (e) => {
    mouseX = (e.clientX - window.innerWidth / 2) / 800;
    mouseY = (e.clientY - window.innerHeight / 2) / 800;
  });

  window.addEventListener('resize', () => {
    if (!container) return;
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
  });

  const clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);
    const time = clock.getElapsedTime();

    coreMesh.rotation.y += 0.005;
    coreMesh.rotation.x += 0.003;
    innerMesh.rotation.y -= 0.008;
    innerMesh.rotation.z += 0.006;

    rings.forEach(r => {
      r.mesh.rotation.z += r.rotSpeed * r.dir;
      r.mesh.rotation.y += (r.rotSpeed / 2) * r.dir;
    });

    // Gentle floating
    mainGroup.position.y = Math.sin(time * 1.5) * 0.2;

    // Mouse Parallax
    mainGroup.rotation.y += (mouseX * 0.6 - mainGroup.rotation.y) * 0.05;
    mainGroup.rotation.x += (-mouseY * 0.4 - mainGroup.rotation.x) * 0.05;

    renderer.render(scene, camera);
  }

  animate();
})();
