<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function  index()
    {
        return view('welcome');
    }
    public function admin()
    {
        return view('Admin.Master');
    }
    public function dashboard()
    {
        return view('Admin.Dashboard.Dashboard');
    }

}
