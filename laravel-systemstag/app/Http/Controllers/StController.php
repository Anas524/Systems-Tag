<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Dataslider;
use Illuminate\Http\Request;

class StController extends Controller
{
    public function index() {
        $datasliders = Dataslider::all();
        return view('index', compact('datasliders'));
    }

    public function about() {
        return view('about');
    }

    public function legal() {
        return view('legal');
    }

    public function storeContactForm(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'message' => 'required|string'
        ]);

        // Save the validated data to the database
        Contact::create($validatedData);

        // Get the referring URL (where the form was submitted from)
        $referrer = $request->headers->get('referer');

        // Define a default redirect path in case the referrer is not valid
        $redirectPath = route('index');

        // If the referrer is valid, append the fragment based on the referrer
        if ($referrer) {
            if (str_contains($referrer, route('about'))) {
                // Redirect to About page, append #aboutContact
                $redirectPath = route('about') . '#aboutContact';
            } elseif (str_contains($referrer, route('legal'))) {
                // Redirect to Legal page, append #contact
                $redirectPath = route('legal') . '#contact';
            }
        }

        return redirect($redirectPath)->with('success', 'Your message has been submitted successfully!');
    }
}
