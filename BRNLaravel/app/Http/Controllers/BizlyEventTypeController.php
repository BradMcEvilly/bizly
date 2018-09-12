<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BizlyEventType;

class BizlyEventTypeController extends Controller
{
    public function index()
    {
        $bizly_event_types = BizlyEventType::all();

        return response()->json($bizly_event_types);
    }
}
