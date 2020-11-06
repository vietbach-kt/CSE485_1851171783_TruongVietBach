<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('backend.users.index', compact('users'));
  }
}
