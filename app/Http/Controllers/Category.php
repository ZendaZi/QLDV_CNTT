<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class Category extends Controller
{
    public function categoryfunc()
    {
        $Category = DB::table('Category')->get('CategoryName');
 
        // return view('staff_assets.category_menu', 
        return view('dashboard', 
        ['Category' => $Category]);
    }
}

