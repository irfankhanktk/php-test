<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelBooking;

class HotelController extends Controller
{
    //
    public function bookHotel(Request $request)
    {
        HotelBooking::create([

        ]);
        return $request->all();
    }
}