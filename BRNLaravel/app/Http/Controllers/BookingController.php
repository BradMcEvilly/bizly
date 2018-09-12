<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();

        return response()->json($bookings);
    }
}
