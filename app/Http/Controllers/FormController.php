<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormFilled;
use App\Http\Services\CaptchaChecker;


class FormController extends Controller

{
    //

    public function submitContactForm(StoreContactFormRequest $request){

        $cc = new CaptchaChecker(env('CAPTCHA_SECRET_KEY'));

        // return response()->json([
        //     'data' => $request->captcha_token,
        //     ],400); //to decieve hackers

        if(!$cc->check($request->captcha_token))  return response()->json([
                'error' => 'Not allowed',
                ],401); //to decieve hackers

        Mail::to(env('CONTACT_FORM_RECEIVER'))->send(new ContactFormFilled($request));



    }
}
