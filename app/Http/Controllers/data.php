<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class data extends Controller
{
    function index()
    {
    	return DB::table('posts')->get();
    }
}
