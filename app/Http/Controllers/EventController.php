<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show(Event $event)
    {
        $categories = \App\Models\Category::all();

        return view('event-detail', compact('event', 'categories'));
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function ticket(Request $request)
    {
        $name = $request->name;

        return view('ticket', compact('name'));
    }
}