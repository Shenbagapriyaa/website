/**
 * Track Tech Solution - 3D Digital Silk & Cybernetic Fabric Wave Engine
 * Concept:
 * - Ultra-luxurious, smooth 3D undulating digital fabric surface representing intelligent textile manufacturing.
 * - Hypnotic, flowing cloth physics with subtle iridescent cyan-to-sapphire light glints.
 * - Cursor creates silky soft surface ripples and dynamic directional lighting.
 * - Clean, non-clumsy, modern, and visually stunning.
 */

(function() {
  'use strict';

  if (typeof THREE === 'undefined') return;

  const canvasContainer = document.getElementById('bg-3d-canvas-container');
  if (!canvasContainer) return;

  // Scene, Camera, Renderer
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
  camera.position.set(0, 18, 38);
  camera.lookAt(0, -2, 0);

  const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true, powerPreference: 'high-performance' });
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = 1.2;
  canvasContainer.appendChild(renderer.domElement);

  // 1. Lighting System for Silk Shimmer
  const ambientLight = new THREE.AmbientLight(0x060c1e, 2.0);
  scene.add(ambientLight);

  const cyanKeyLight = new THREE.DirectionalLight(0x00f0ff, 2.5);
  cyanKeyLight.position.set(-15, 20, 15);
  scene.add(cyanKeyLight);

  const indigoFillLight = new THREE.DirectionalLight(0x6366f1, 2.0);
  indigoFillLight.position.set(15, -10, -10);
  scene.add(indigoFillLight);

  const cursorSpotLight = new THREE.PointLight(0x38bdf8, 4.0, 45);
  cursorSpotLight.position.set(0, 10, 15);
  scene.add(cursorSpotLight);

  // 2. Ultra-Smooth 3D Digital Silk Surface (Plane Geometry with Smooth Normals)
  const planeWidth = 70;
  const planeHeight = 45;
  const segmentsX = 90;
  const segmentsY = 60;

  const geometry = new THREE.PlaneGeometry(planeWidth, planeHeight, segmentsX, segmentsY);
  geometry.rotateX(-Math.PI / 2.3);

  // Custom Satin/Silk Material with Subtle Wireframe Blend
  const material = new THREE.MeshStandardMaterial({
    color: 0x071126,
    emissive: 0x030814,
    roughness: 0.25,
    metalness: 0.85,
    flatShading: false,
    wireframe: false,
    side: THREE.DoubleSide
  });

  const silkMesh = new THREE.Mesh(geometry, material);
  silkMesh.position.set(0, -6, 0);
  scene.add(silkMesh);

  // Thin Wireframe Accent Layer for Tech Precision
  const wireMat = new THREE.MeshBasicMaterial({
    color: 0x00f0ff,
    wireframe: true,
    transparent: true,
    opacity: 0.08
  });
  const wireMesh = new THREE.Mesh(geometry, wireMat);
  wireMesh.position.set(0, -5.95, 0);
  scene.add(wireMesh);

  // Store initial vertex positions
  const posAttribute = geometry.attributes.position;
  const initialZ = new Float32Array(posAttribute.count);
  for (let i = 0; i < posAttribute.count; i++) {
    initialZ[i] = posAttribute.getY(i); // Since rotated
  }

  // Mouse & Parallax Coordinates
  let mouseX = 0;
  let mouseY = 0;
  let targetCamX = 0;
  let targetCamY = 18;

  window.addEventListener('mousemove', (e) => {
    const halfX = window.innerWidth / 2;
    const halfY = window.innerHeight / 2;
    mouseX = (e.clientX - halfX) / halfX;
    mouseY = (e.clientY - halfY) / halfY;

    // Move 3D spotlight to follow cursor
    cursorSpotLight.position.x = mouseX * 25;
    cursorSpotLight.position.z = 15 - mouseY * 10;
    cursorSpotLight.position.y = 8 - mouseY * 5;

    document.documentElement.style.setProperty('--mx', `${e.clientX}px`);
    document.documentElement.style.setProperty('--my', `${e.clientY}px`);
  });

  window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
  });

  // Animation Loop
  const clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);

    const time = clock.getElapsedTime() * 0.7;

    // Animate Silk Wave Curvature smoothly across all vertices
    const positions = posAttribute.array;
    for (let i = 0; i < posAttribute.count; i++) {
      const idx = i * 3;
      const x = positions[idx];
      const z = positions[idx + 2];

      // Multi-octave harmonic fabric wave equations
      const wave1 = Math.sin(x * 0.12 + time * 1.2) * 2.2;
      const wave2 = Math.cos(z * 0.15 + time * 0.9) * 2.0;
      const wave3 = Math.sin((x + z) * 0.08 + time * 1.5) * 1.4;

      // Cursor ripple interaction
      const distToCursor = Math.sqrt(Math.pow(x - mouseX * 22, 2) + Math.pow(z - mouseY * 15, 2));
      const cursorInfluence = Math.max(0, 1 - distToCursor / 18) * Math.sin(time * 4 - distToCursor * 0.5) * 1.8;

      positions[idx + 1] = wave1 + wave2 + wave3 + cursorInfluence; // y-displacement
    }

    posAttribute.needsUpdate = true;
    geometry.computeVertexNormals();

    // Gentle camera parallax
    targetCamX = mouseX * 4;
    targetCamY = 18 - mouseY * 3;

    camera.position.x += (targetCamX - camera.position.x) * 0.03;
    camera.position.y += (targetCamY - camera.position.y) * 0.03;
    camera.lookAt(0, -2, 0);

    renderer.render(scene, camera);
  }

  animate();
})();
