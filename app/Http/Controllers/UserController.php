<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class UserController extends Controller
{
    public function index(){
        $hero = [
            "title" => "Welcome to Newsmakers Media",
            "heading" => "Top Public Relation Agency in India.",
            "description" => "Empowering brand to reach their potential customers with our top rated services and out of the box idea."
        ];
        return view('index',['hero'=>$hero]);
    }

    public function getContactView(){
        return view('contact');
    }
    
    public function getAboutView(){
        return view('about');
    }

    public function getMarketingView(){
        return view('marketing');
    }

    public function getDigitalMarketingView(){
        return view('dm');
    }

    public function getPRView(){
        return view('pr');
    }

    public function getTvInterviewView(){
        return view('tv');
    }
    
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'mf-first-name' => 'required|string|max:255',
            'mf-last-name' => 'required|string|max:255',
            'mf-email' => 'required|email|max:255',
            'mf-mobile' => 'required|string|max:255',
            'mf-Company' => 'required|string|max:255',
            'mf-subject' => 'required|string|max:255',
            'mf-comment' => 'required|string',
        ]);

        // Create a new Contact model instance and fill it with form data
        $contact = new Contact();
        $contact->first_name = $request->input('mf-first-name');
        $contact->last_name = $request->input('mf-last-name');
        $contact->email = $request->input('mf-email');
        $contact->mobile = $request->input('mf-mobile'); // Added mobile number
        $contact->Company = $request->input('mf-Company'); // Added Company name
        $contact->subject = $request->input('mf-subject');
        $contact->comments = $request->input('mf-comment');

        // Save the data to the database
        $contact->save();

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
