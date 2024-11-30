<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('pages.Home');
    }

    public function about()
    {
        return view('pages.About');
    }

    public function service()
    {
        return view('pages.Service');
    }

    public function pricing()
    {
        return view('pages.Pricing');
    }

    public function blog()
    {
        return view('pages.Blog');
    }

    public function blogdetails()
    {
        return view('pages.Blog_Details');
    }

    public function contact()
    {
        return view('pages.Contact');
    }
    public function privacy()
    {
        return view('pages.Privacy');
    }
}
