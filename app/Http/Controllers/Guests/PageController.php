<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function trains()
    {
        return view('trains', ['trains' => Train::all()]);
    }

    public function today_trains()
    {
        //dd(Train::whereDay('departure_time', '=', date('d'))->get());
        return view('today_trains', ['trains' => Train::whereDay('departure_time', '=', date('d'))->get()]);
    }
}
