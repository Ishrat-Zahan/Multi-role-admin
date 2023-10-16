<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('layouts.content');
    }

    public function manager(){
        return view('manager');
    }
    public function subadmin(){
        return view('subadmin');
    }
}
