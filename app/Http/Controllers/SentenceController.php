<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sentences = Sentence::latest()->paginate(5);

        return view('sentences.index',compact('sentences'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sentences.create');
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
            'name' => 'required',
            'position' => 'required',
            'styling' => 'required',
        ]);

        Sentence::create($request->all());

        return redirect()->route('sentences.index')
                        ->with('success','Sentence created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sentence  $sentence
     * @return \Illuminate\Http\Response
     */
    public function show(Sentence $sentence)
    {
        return view('sentences.show',compact('sentence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sentence  $sentence
     * @return \Illuminate\Http\Response
     */
    public function edit(Sentence $sentence)
    {
        return view('sentences.edit',compact('sentence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sentence  $sentence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sentence $sentence)
    {
         $request->validate([
            'name' => 'required',
            'position' => 'required',
            'styling' => 'required',
        ]);

        $sentence->update($request->all());

        return redirect()->route('sentences.index')
                        ->with('success','Sentence updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sentence  $sentence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sentence $sentence)
    {
        $sentence->delete();

        return redirect()->route('Sentences.index')
                        ->with('success','Sentence deleted successfully');
    }

    public function boot()
    {
        View::share('key', 'value');
    }

    public function table() {
        $sentences = Sentence::all();
        return view('welcome', compact('sentences'));
    }
}
