<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getIndex()
    {
        return view('index');
    }

    public function getPrivacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function getTermsCondition()
    {
        return view('pages.terms-conditions');
    }
}
