<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return view('main/index');
    }

    public function about()
    {
        return view('main/about');
    }

    public function courses()
    {
        return view('main/courses');
    }

    public function gallery()
    {
        return view('main/gallery');
    }

    public function events()
    {
        return view('main/events');
    }

    public function blog()
    {
        return view('main/blog');
    }

    public function accreditations()
    {
        return view('main/accreditations');
    }

    public function enquiry()
    {
        return view('main/enquiry');
    }

    public function contact()
    {
        return view('main/contact');
    }
    
}
