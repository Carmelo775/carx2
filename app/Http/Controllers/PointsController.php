<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Points;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Points::all();

        return view('points.index')->with('points', $points);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('points.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $points = Points::all()->count();

        if($points > '0')
        {
            return redirect('/login');
        }
        else
        {

        $p = new Points($request->all());
        $p->id = '1';

        if($p->save())
        {
            return view('points.create');
        }
        else
        {
            return redirect('/login');
        }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $points = Points::find($id);
        return view('points.edit')->with('points', $points);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Points::find($id);

        $update->fill($request->all());

        if($update->save())
        {
            return redirect('/points');
        }else
        {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Points::find($id);

        if($p->delete())
        {
            return redirect('/points');
        }
        else
        {
            return redirect('/login');
        }

    }
}
