<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()

    $users = Login::all();
    return view('User.login', compact('users'));
}
