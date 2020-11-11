<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

        $users = User::orderByRaw('lname', 'fname')->limit(50)->get();

        return view('users.index', ['users' => $users]);
    }
}
