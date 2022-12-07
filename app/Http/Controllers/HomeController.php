<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        // dd($role);
        if($role==1){
            return view('dashboard');
        }
        elseif($role==0){
            return view('dashboard');
        }
    }
}
