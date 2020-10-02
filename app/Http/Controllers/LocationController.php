<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index()
    {
        $locs = Location::all();

        return view('loc-index', compact('locs'));
    }

    public function show($id) {

        $loc = Location::findOrFail($id);

        return view('loc-show', compact('loc'));
    }

    public function save(Request $request, $id) {

        $data = $request -> all();

        $loc = Location::findOrFail($id);

        $loc -> update($data);

        return redirect() -> route('loc-show', $id);
    }

}
