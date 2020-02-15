<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class debugging extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function employee()
    {
        return view('employee.employeeindex');
    }


      public function admin()
    {
        return view('admin.adminindex');
    }
    public function ceo()
    {
        return view('ceo.ceoindex');
    }
}
