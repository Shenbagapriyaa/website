<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thank you for contacting Track Tech Solution</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #040711; color: #f8fafc; margin: 0; padding: 30px 15px; }
    .email-container { max-width: 600px; margin: 0 auto; background-color: #0b1120; border: 1px solid rgba(0, 240, 255, 0.25); border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
    .email-header { background: linear-gradient(135deg, #0b1329 0%, #030712 100%); padding: 30px 24px; text-align: center; border-bottom: 1px solid rgba(0, 240, 255, 0.2); }
    .logo-badge { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: linear-gradient(135deg, #00f0ff, #3b82f6); border-radius: 10px; font-weight: 800; font-size: 20px; color: #040711; margin-bottom: 12px; }
    .brand-title { font-size: 22px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px; margin: 0; }
    .brand-title span { color: #00f0ff; }
    .email-body { padding: 32px 28px; color: #cbd5e1; font-size: 15px; line-height: 1.6; }
    .lead-greeting { font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 12px; }
    .summary-box { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 12px; padding: 20px; margin: 24px 0; }
    .cta-btn { display: inline-block; background: linear-gradient(135deg, #00f0ff, #3b82f6); color: #040711; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 9999px; margin-top: 20px; text-align: center; }
    .email-footer { padding: 20px 24px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid rgba(255, 255, 255, 0.05); }
  </style>
</head>
<body>
  <div class="email-container">
    <div class="email-header">
      <div class="logo-badge">T</div>
      <h1 class="brand-title">TRACK TECH <span>SOLUTION</span></h1>
      <p style="color: #94a3b8; font-size: 13px; margin-top: 6px;">Next-Gen Garment & Textile Digital Factory Ecosystem</p>
    </div>

    <div class="email-body">
      <p class="lead-greeting">Dear {{ $inquiry->name }},</p>
      <p>Thank you for submitting your inquiry with Track Tech Solution. We have received your request for <strong>{{ strtoupper($inquiry->type) }}</strong> and our textile digitisation team is reviewing your requirements.</p>

      <div class="summary-box">
        <div style="font-size: 12px; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; font-weight: 700;">Submission Summary</div>
        <div style="margin-bottom: 8px;"><strong style="color: #94a3b8;">Inquiry Type:</strong> <span style="color: #00f0ff; font-weight: 600;">{{ ucfirst($inquiry->type) }}</span></div>
        <div style="margin-bottom: 8px;"><strong style="color: #94a3b8;">Solution Interest:</strong> <span style="color: #ffffff;">{{ $inquiry->solution_interest ?? 'Textile ERP & Production Tracking' }}</span></div>
        @if($inquiry->company)
          <div style="margin-bottom: 8px;"><strong style="color: #94a3b8;">Company:</strong> <span style="color: #ffffff;">{{ $inquiry->company }}</span></div>
        @endif
        @if($inquiry->factory_lines)
          <div style="margin-bottom: 8px;"><strong style="color: #94a3b8;">Factory Production Lines:</strong> <span style="color: #ffffff;">{{ $inquiry->factory_lines }} Lines</span></div>
        @endif
      </div>

      <p>A dedicated technology consultant will connect with you within <strong>24 business hours</strong> to schedule an interactive live demonstration or share a customized solution proposal.</p>

      <p style="margin-top: 24px;">For urgent inquiries, reach out directly:</p>
      <p style="color: #00f0ff; font-weight: 600; margin: 4px 0;">📞 +91 98400 00000 / +91 94440 00000</p>
      <p style="color: #38bdf8; font-weight: 600; margin: 4px 0;">✉️ contact@tracktechsolution.com</p>
    </div>

    <div class="email-footer">
      &copy; {{ date('Y') }} Track Tech Solution. All Rights Reserved.<br>
      Leading Garment IoT, RFID & Smart Factory Manufacturing Tech.
    </div>
  </div>
</body>
</html>
