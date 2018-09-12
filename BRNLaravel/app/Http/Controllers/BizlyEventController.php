<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BizlyEvent;

class BizlyEventController extends Controller
{
    public function index()
    {
        $bizly_events = BizlyEvent::all();

        return response()->json($bizly_events);
    }
}
