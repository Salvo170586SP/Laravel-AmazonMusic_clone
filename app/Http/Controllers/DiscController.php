<?php

namespace App\Http\Controllers;
use App\Disc;

use Illuminate\Http\Request;

class DiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discs = Disc::orderBy('title')->get();

        return view('discs.index', compact('discs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'author' => 'required|string|min:2',
            'year' => 'required|string',
            'poster' => 'nullable',
            'description' => 'nullable|string|min:10',
        ]);

        $data = $request->all();


        $new_disc = new Disc();
        $new_disc->fill($data);
        $new_disc->save();

        return redirect()->route('discs.show', $new_disc );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $disc = Disc::findOrFail($id);
        
        return view('discs.show', compact('disc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Disc $disc)
    {
        
        return view('discs.edit', compact('disc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disc $disc)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'author' => 'required|string|min:2',
            'year' => 'required|string',
            'poster' => 'nullable',
            'description' => 'nullable|string|min:10',
        ]);

        $data = $request->all();

        /* $disc->fill($data);
        $disc->save(); */

        $disc->update($data);
        
        return redirect()->route('discs.show', $disc->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disc $disc)
    {

        $disc->delete();


        return redirect()->route('discs.index');
    }
}
