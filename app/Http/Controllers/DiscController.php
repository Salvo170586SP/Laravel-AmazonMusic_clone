<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscController extends Controller
{
    public function index(){

        $discs = config('discs');

        return view('discs.index', compact('discs'));
    }

    public function show($id){

        $discs = config('discs');

        $disc = $discs[$id];


        return view('discs.show', compact('disc'));
    }
}
