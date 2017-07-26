<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    /**
     * Display a home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function showErrorRole()
    {
        return view('errors.destroy_head');
    }

}