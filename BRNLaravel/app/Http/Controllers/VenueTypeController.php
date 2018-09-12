<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VenueType;

class VenueTypeController extends Controller
{
    public function index()
    {
        $venue_types = VenueType::all();

        return response()->json($venue_types);
    }
}
