<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index1()
    {
        return view('admin.index');
    }
    Public function index2()
    {
        return view('operator.index');
    }
    Public function index3()
    {
        return view('kepsek.index');
    }
}
