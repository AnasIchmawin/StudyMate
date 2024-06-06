<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('layouts.timetable', compact('events'));
    }

    public function create()
    {
        return view("layouts.AddEvent");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'day' => 'required|max:255',
            'hour' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) {
                    if (!($value == 0 || ($value >= 8 && $value <= 23))) {
                        $fail('The ' . $attribute . ' must be an integer between 08 and 23 or equal to 00.');
                    }
                },
            ],
            'type' => 'required|max:255',
        ]);
    
        Event::create($request->all());
    
        return redirect()->route('events.index');
    }
    

    public function show($id)
{
    $events = Event::all();
    return view("layouts.timetable", compact('events'));
}


    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->name = $request->name;
        $event->day = $request->day;
        $event->hour = $request->hour;
        $event->type = $request->type;
        $event->save();

        return response()->json($event);
    }
}
