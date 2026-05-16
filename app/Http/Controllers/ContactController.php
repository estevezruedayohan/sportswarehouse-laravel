<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Shows the clean inicial form
     */
    public function show(){
        return view('contactUs');
    }

    /**
     * Processes the submit
     */
    public function submit(Request $request){
        // Sanitization
        if($request->has('phoneNumber')){
            $cleanPhone = preg_replace('/[^0-9]/', '', $request->input('phoneNumber'));

            $request->merge(['phoneNumber' => $cleanPhone]);
        }

        // Set up the validation rules
        $rules = [
            'firstName' => ['string', 'required', 'min:2', 'max:30'],
            'lastName' => ['string', 'required', 'min:2', 'max:50'],
            'phoneNumber' => ['numeric','digits:10'],
            'email' => ['required', 'email:rfc,dns'],
            'questions' => ['string', 'required', 'min:10', 'max:200'],
        ];

        $messages = [
            'string' => 'The :attribute must be valid text',
            'required' => 'The :attribute is required',
            'min' => 'The :attribute is too short',
            'max' => 'The :attribute is too long',
            'phoneNumber.numeric' => 'Phone number must contain only digits',
            'phoneNumber.digits' => 'Phone number must be exactly 10 digits',
            'email.email' => 'The email is invalid or the domain does not exist',
        ];

        $validatedData = $request->validate($rules, $messages);

        return view('partials._contactSuccess', ['data' => $validatedData]);
    }
}
