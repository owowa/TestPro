<?php

namespace App\Http\Controllers;

use App\NabeJapan;
use Illuminate\Http\Request;

class NabeJapanController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\NabeJapan::paginate(5);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title'=>['required'],
            'content'=>['required', 'min:10'],
            'password'=>['required', 'max:4']
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // $article = \App\NabeJapan::find(1)->create($request->all());
        $article = \App\NabeJapan::create($request->all());

        if(!$article){
            return back();
        }

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NabeJapan  $NabeJapan
     * @return \Illuminate\Http\Response
     */
    public function show(NabeJapan $NabeJapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NabeJapan  $NabeJapan
     * @return \Illuminate\Http\Response
     */
    public function edit(NabeJapan $NabeJapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NabeJapan  $NabeJapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NabeJapan $NabeJapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NabeJapan  $NabeJapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NabeJapan $NabeJapan)
    {
        //
    }
}
