<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('login');
    }

    public function getAdminContactView(){
        return view('admin_contact');
    }

    public function login(Request $request)
    {
        // Validate the form data (optional but recommended)
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($validatedData)) {
            session()->regenerate();
            // Authentication passed, user logged in
            return redirect('admin/contact')->with(['success' => 'Login Successful']); // Replace '/dashboard' with the desired redirect URL
        } else {
            // Authentication failed, redirect back to the login page with an error message
            return back()->with(['login_error' => 'Invalid credentials.']);
        }
    }

    public function logout(Request $request)
    {
        // Log the user out using Laravel's built-in logout method
        auth()->logout();

        // Invalidate the user's session
        $request->session()->invalidate();

        // Generate a new CSRF token for the session
        $request->session()->regenerateToken();

        // Redirect the user to the login page with a success message
        return redirect('/admin/login')->with(['success' => 'Logout Successful']);
    }
    public function getContactData()
    {
        $contacts = Contact::all(); 

        return view('admin_contact', ['contacts' => $contacts]);
    }

    public function updateContact(Request $request)
    {
        $contactId = $request->input('contact_id');
        $isContacted = $request->input('is_contacted', 0);

        // Find the contact by ID and update the isContacted field
        $contact = Contact::find($contactId);
        if ($contact) {
            $contact->isContacted = $isContacted;
            $contact->save();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Contact not found.']);
    }
}
