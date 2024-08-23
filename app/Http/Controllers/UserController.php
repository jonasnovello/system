<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(): View{
        $users = User::paginate(14);
        return view('system.users.users', ['users' => $users]);
    }
}
