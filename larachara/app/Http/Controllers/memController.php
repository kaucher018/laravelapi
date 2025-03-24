<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "return by get from thunder";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "return by POST from thunder";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "return by PUT from thunder";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "return by delete from thunder";
    }
    
}
