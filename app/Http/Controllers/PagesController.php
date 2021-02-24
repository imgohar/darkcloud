<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("pages.home");
    }

    public function aboutUs(){
        return view("pages.about-us");
    }

    public function clients(){
        return view("pages.clients");
    }

    public function faq(){
        return view("pages.faq");
    }

    public function pricing(){
        return view("pages.pricing");
    }

    public function team(){
        return view("pages.team");
    }

    public function services(){
        return view("pages.services");
    }

    public function contactUs(){
        return view("pages.contact-us");
    }
}

