<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function index()
{
    $consultations = Consultation::all();
    return view('consultation.viewconsultation', compact('consultations'));
}

    // Display the consultation form
    public function showForm($image)
{
    return view('consultationform', compact('image'));
}
    // Handle the consultation form submission
    public function requestConsultation(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        // Save the consultation request to the database
        $consultation = Consultation::create($request->all());

        // Send an email to the provided email address
//         Mail::send('emails.consultation_request', ['consultation' => $consultation], function ($message) use ($consultation) {
//         $message->to($consultation->email)
//             ->subject('Consultation Request Received');
//       });

        // Redirect or return a response
        return redirect()->route('home')->with('status', 'Your consultation request has been sent!');
    }
}