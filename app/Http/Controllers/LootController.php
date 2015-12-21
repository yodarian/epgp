<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loot;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Psy\ExecutionLoop\Loop;

class LootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loot = Loot::all();

        return view('loot.index', compact('loot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @todo create custom Request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Loot::create($request->all());

        return redirect('loot');
    }

    /**
     * Display the specified resource.
     *
     * @param Loot $loot
     * @return \Illuminate\Http\Response
     */
    public function show(Loot $loot)
    {
        return view('loot.show', compact('loot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Loot $loot
     * @return \Illuminate\Http\Response
     */
    public function edit(Loot $loot)
    {
        return view('loot.edit', compact('loot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Loot $loot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loot $loot)
    {
        $loot->update($request->all());

        return redirect('loot');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Loot $loot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loot $loot)
    {
        $loot->delete();

//        Session::flash('message', 'Successfully deleted the loot!');

        return redirect('loot');
    }
}
