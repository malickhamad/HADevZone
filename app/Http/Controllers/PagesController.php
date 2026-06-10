<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function feature()
    {
        return view('frontend.feature');
    }

    public function quote()
    {
        return view('frontend.quote');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function serviceDetail()
    {
        return view('frontend.service-detail');
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('frontend.termsandconditions');
    }
}