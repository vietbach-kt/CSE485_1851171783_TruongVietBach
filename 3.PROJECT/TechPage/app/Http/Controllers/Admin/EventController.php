<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        if ($user_id == null)
        {
            return redirect()->route('userLogin');
        }
        $event = new Event();
        $event -> name = $request -> name;
        $event -> content = $request -> content;
        $event -> start_time = $request -> start_time;
        $event -> end_time = $request -> end_time;
        $event -> user_id = $user_id;
        if($event -> save()){
            return redirect()->route('adminPage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $event = Event::find($id);
        $event -> name = $request -> name;
        $event -> content = $request -> content;
        $event -> start_time = $request -> start_time;
        $event -> end_time = $request -> end_time;
        if($event -> save()){
            return redirect()->route('adminPage');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
