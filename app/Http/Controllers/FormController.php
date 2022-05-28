<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormFilled;


class FormController extends Controller
{
    //

    public function submitContactForm(StoreContactFormRequest $request){

        Mail::to(env('CONTACT_FORM_RECEIVER'))->send(new ContactFormFilled($request));



    }
}
