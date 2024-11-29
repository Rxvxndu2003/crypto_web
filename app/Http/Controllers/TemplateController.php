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
}
