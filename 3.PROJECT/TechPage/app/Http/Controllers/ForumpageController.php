<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumpageController extends Controller
{
  public function forum()
  {
    return view('forumpage/forum');
  }
}
