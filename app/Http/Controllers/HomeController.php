<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $locations = Location::orderBy('id', 'desc')->get();
        $admins = User::all();

        return view('home')->with(compact('locations', 'admins'));
    }
}
