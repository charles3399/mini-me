<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feeds;
use Illuminate\Http\Request;

class FeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Feeds::latest()->paginate(15);

        return Inertia::render('Feeds/Index', ['feeds' => $feeds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fc  $fc
     * @return \Illuminate\Http\Response
     */
    public function show(fc $fc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fc  $fc
     * @return \Illuminate\Http\Response
     */
    public function edit(fc $fc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fc  $fc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fc $fc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fc  $fc
     * @return \Illuminate\Http\Response
     */
    public function destroy(fc $fc)
    {
        //
    }
}
