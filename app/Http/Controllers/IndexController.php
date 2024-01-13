<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check');
    }

      public function index(){
          return view('dashboard.index');
      }
}
