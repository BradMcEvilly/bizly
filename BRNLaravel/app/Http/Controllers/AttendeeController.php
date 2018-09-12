<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendee;

class AttendeeController extends Controller
{
    public function index()
    {
        $attendees = Attendee::all();

        return response()->json($attendees);
    }
}
