<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function getContactView(){
        return view('contact');
    }
    
    public function getAboutView(){
        return view('about');
    }

    public function getDigitalMarketingView(){
        return view('marketing');
    }
    
    public function submitForm(Request $request)
    {
        // Validate the form data (you can add validation rules here)

        // Create a new Contact model instance and fill it with form data
        $contact = new Contact();
        $contact->first_name = $request->input('mf-first-name');
        $contact->last_name = $request->input('mf-last-name');
        $contact->email = $request->input('mf-email');
        $contact->subject = $request->input('mf-subject');
        $contact->comments = $request->input('mf-comment');

        // Save the data to the database
        $contact->save();

        // Redirect back to the contact form or display a success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
