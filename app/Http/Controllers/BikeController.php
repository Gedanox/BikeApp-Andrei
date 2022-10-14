<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bike.index');
    }
    
    public function create()
    {
        //
        return view('bike.create');
    }
    
    /*public function store(Request $request)
    {
        //
    }*/
    public function show($id)//(Bike $bike)
    {
        //
        return view('bike.show', ['id' => $id]);
    }
    
    public function edit($id)//(Bike $bike)
    {
        //
        return view('bike.edit', ['id' => $id]);
    }
    /*public function update(Request $request, $id)//(Request $request, Bike $bike)
    {
        //
    }*/
    public function delete($id)//(Bike $bike)
    {
        //
        return view('bike.delete', ['id' => $id]);
    }
}
