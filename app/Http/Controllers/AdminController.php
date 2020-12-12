<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index (){
        $this->authorizeForUser(auth()->user(),'show-dashboard');
        return view('admin.dashboard');
    }
}
