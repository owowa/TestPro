<?php

namespace App\Http\Controllers;

use App\Nabe;
use Illuminate\Http\Request;

class NabeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\Nabe::paginate(5);
        return view('articles.index', compact('articles'));
        // return view('welcome');
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

        $article = \App\Nabe::find(1)->create($request->all());

        if(!$article){
            return back();
        }

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nabe  $nabe
     * @return \Illuminate\Http\Response
     */
    public function show(Nabe $nabe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nabe  $nabe
     * @return \Illuminate\Http\Response
     */
    public function edit(Nabe $nabe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nabe  $nabe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nabe $nabe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nabe  $nabe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nabe $nabe)
    {
        //
    }
}
