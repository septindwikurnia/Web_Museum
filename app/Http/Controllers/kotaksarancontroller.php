<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kotaksaran;

class kotaksarancontroller extends Controller
{
    public function store(Request $request) {
        Kotaksaran::create($request->all());
        return redirect('lokasi')->with('message', 'Your message has been sent. Thank you!');
    }
}