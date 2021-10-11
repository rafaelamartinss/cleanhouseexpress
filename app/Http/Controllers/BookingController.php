<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BookingController extends BaseController
{
    public function index() {
        return view('booking');
    }
}
