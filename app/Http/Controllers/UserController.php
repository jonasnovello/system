<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(): View{
        $users = User::all();
        return view('system.users.users', ['users' => $users]);
    }
}
