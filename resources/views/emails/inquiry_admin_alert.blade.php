<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>New Inquiry Received - Track Tech Solution</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #0f172a; color: #f8fafc; margin: 0; padding: 25px 15px; }
    .box { max-width: 600px; margin: 0 auto; background-color: #1e293b; border-radius: 12px; border: 1px solid #334155; padding: 25px; }
    .title { color: #38bdf8; font-size: 20px; font-weight: 700; margin-bottom: 15px; }
    .field { margin-bottom: 12px; border-bottom: 1px solid #334155; padding-bottom: 8px; }
    .label { color: #94a3b8; font-size: 12px; text-transform: uppercase; font-weight: 600; }
    .val { color: #ffffff; font-size: 15px; font-weight: 600; margin-top: 3px; }
  </style>
</head>
<body>
  <div class="box">
    <div class="title">⚡ New Website Lead ({{ strtoupper($inquiry->type) }})</div>
    <div class="field"><div class="label">Name</div><div class="val">{{ $inquiry->name }}</div></div>
    <div class="field"><div class="label">Email</div><div class="val">{{ $inquiry->email }}</div></div>
    <div class="field"><div class="label">Phone</div><div class="val">{{ $inquiry->phone ?? 'Not provided' }}</div></div>
    <div class="field"><div class="label">Company</div><div class="val">{{ $inquiry->company ?? 'Not provided' }}</div></div>
    <div class="field"><div class="label">Factory Lines</div><div class="val">{{ $inquiry->factory_lines ? $inquiry->factory_lines . ' Lines' : 'Not specified' }}</div></div>
    <div class="field"><div class="label">Solution Requested</div><div class="val">{{ $inquiry->solution_interest ?? 'General' }}</div></div>
    <div class="field"><div class="label">Message</div><div class="val" style="font-weight: 400; color: #cbd5e1;">{{ $inquiry->message ?? 'No message entered' }}</div></div>
    <div style="font-size: 12px; color: #64748b; margin-top: 20px;">Submitted at: {{ $inquiry->created_at->format('d M Y, h:i A') }} (IP: {{ request()->ip() }})</div>
  </div>
</body>
</html>
