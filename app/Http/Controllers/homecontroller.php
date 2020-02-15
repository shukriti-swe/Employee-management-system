<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('home');
  }
  public function about()
  {
    return view('about');
  }
    public function service()
  {
    return view('service');
  }
    public function photos()
  {
    return view('photos');
  }
    public function contact()
  {
    return view('contact');
  }
    public function description()
  {
    return view('description');
  }
}
