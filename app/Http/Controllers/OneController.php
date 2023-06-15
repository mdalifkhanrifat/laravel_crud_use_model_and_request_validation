<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOneRequest;
use App\Http\Requests\UpdateOneRequest;
use App\Models\One;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = One::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOneRequest $request)
    {
        try {
            $data = $request->validated();
            One::create($data);
            return redirect('/one')->with('massage', 'Data added successfully');
        } catch (\Exception $e) {
            return redirect('/one')->with('massage', 'Data Not added successfully' . $e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(One $one)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(One $one)
    {
        //dd($one);
        return view('edit', compact('one'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOneRequest $request, One $one)
    {
        try {
            $data = $request->validated();
            $one->fill($data);
            $one->save();
            return redirect('/one')->with('massage', 'Data Update successfully');
        } catch (\Exception $e) {
            return redirect('/one')->with('massage', 'Data Update failed' . $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(One $one)
    {
        $one->delete();
        return redirect()->back()->with('massage','Delete successfully');
    }
}
