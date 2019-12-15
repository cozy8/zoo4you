<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Cat();
        $cat->item_name = $request->input('title');
        $cat->category = $request->input('category');
        $cat->description = $request->input('description');
        $cat->dimensions = $request->input('dimension');
        $cat->quantity = $request->input('quantity');
        $cat->price = $request->input('price');
        $cat->photo = '.!.';

        $cat->save();

        return redirect('kates')->with('success', 'Prekė pridėta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        return view('cat.show')->with('cat', $cat);
    }


    public function category(Request $request)
    {
        $cats = Cat::where('category', $request->input('category'))->get();

        return view('cat.category')->with('cats', $cats);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        //
    }
}
