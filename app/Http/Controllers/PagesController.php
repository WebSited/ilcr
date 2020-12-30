<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function activities()
    {
        return view('pages.activities');
    }

    public function masters()
    {
        return view('pages.masters');
    }

    public function training()
    {
        return view('pages.training');
    }

    public function pgd()
    {
        return view('pages.pgd');
    }

}
