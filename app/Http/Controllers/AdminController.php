<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index (){
        $this->authorizeForUser(auth()->user(),'show-dashboard');
        return view('admin.dashboard');
    }
}
