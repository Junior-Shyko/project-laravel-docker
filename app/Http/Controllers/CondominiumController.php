<?php

namespace Condominium\Http\Controllers;

use Condominium\Condominium;
use Illuminate\Http\Request;

class CondominiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cond = Condominium::paginate(6);
        return $cond;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \Condominium\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function show(Condominium $condominium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Condominium\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominium $condominium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Condominium\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condominium $condominium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Condominium\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominium $condominium)
    {
        //
    }
}
