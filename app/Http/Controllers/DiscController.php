<?php

namespace App\Http\Controllers;

use App\Disc;

use Illuminate\Http\Request;

class DiscController extends Controller
{
    public function index()
    {

        $discs = Disc::all();

        return view('discs.index', compact('discs'));
    }

    public function show($id)
    {

        $disc = Disc::findOrFail($id);

        return view('discs.show', compact('disc'));
    }
}
