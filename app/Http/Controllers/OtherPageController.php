<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function getTermsAndCondition()
    {
        return view('others.terms-and-condition');
    }
    public function getPrivacyPolicy()
    {
        return view('others.privacy-policy');
    }
    public function getContact()
    {
        return view('others.contact');
    }
}
