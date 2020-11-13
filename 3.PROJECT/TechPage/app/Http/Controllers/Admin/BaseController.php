<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Event;

class BaseController extends Controller
{
  public function home()
  {
    $users = User::all();
    $events = Event::all();
    return view('admin/base/home',compact('users', 'events'));
  }
}
