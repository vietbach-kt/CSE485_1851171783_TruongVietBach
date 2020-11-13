<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Micropost;
use App\User;

class ForumpageController extends Controller
{
  public function forum()
  {
    $microposts = Micropost::all();
    return view('forumpage.forum',compact('microposts'));
  }
}
