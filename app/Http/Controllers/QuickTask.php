<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuickTask extends Controller
{
    public function getIndex(){
    	return view('tasks');
    }
}
