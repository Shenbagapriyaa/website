<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Store an inquiry (Demo, Quote, or Contact) and trigger real email dispatch
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'factory_lines' => 'nullable|integer',
            'type' => 'nullable|string|in:demo,quote,contact',
            'solution_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        // 1. Store in Database
        $inquiry = Inquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'factory_lines' => $validated['factory_lines'] ?? null,
            'type' => $validated['type'] ?? 'contact',
            'solution_interest' => $validated['solution_interest'] ?? 'All Solutions',
            'message' => $validated['message'] ?? null,
        ]);

        // 2. Dispatch Real Emails (To Submitter & Admin)
        $emailSent = false;
        try {
            // Send branded confirmation email to the client/user
            Mail::send('emails.inquiry_confirmation', ['inquiry' => $inquiry], function ($m) use ($inquiry) {
                $m->to($inquiry->email, $inquiry->name)
                  ->subject('Inquiry Confirmation - Track Tech Solution');
            });

            // Send notification lead alert to company admin
            $adminEmail = config('mail.from.address', 'contact@tracktechsolution.com');
            Mail::send('emails.inquiry_admin_alert', ['inquiry' => $inquiry], function ($m) use ($adminEmail, $inquiry) {
                $m->to($adminEmail)
                  ->subject('⚡ New ' . ucfirst($inquiry->type) . ' Lead: ' . $inquiry->name);
            });

            $emailSent = true;
            Log::info("Inquiry emails sent successfully to {$inquiry->email} and admin.");
        } catch (\Exception $e) {
            Log::warning("Inquiry email sending failed: " . $e->getMessage());
        }

        $successMsg = 'Thank you for reaching out! Your inquiry has been registered, and our textile digitisation specialist will connect with you within 24 hours.';

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMsg,
                'email_sent' => $emailSent,
                'inquiry' => $inquiry
            ]);
        }

        return back()->with('success', $successMsg);
    }
}
