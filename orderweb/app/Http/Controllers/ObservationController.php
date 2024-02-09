<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $observation = Observation::all(); //select from causal
        //dd($observation);
        return view('observation.index', compact('observation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('observation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //insert into observation (description) values('xxxx')
            $observation =Observation::create($request->all());
            session()->flash('message','registro creado exitosamente');
            return redirect()->route('observation.index');
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
        $observation = Observation::find($id);
       if($observation)
       {
        return view('observation.edit', compact('observation'));
       }
       else
       {
        return redirect()->route('observation.index');
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $observation = Observation::find($id);
        if($observation)
        {
            $observation->update($request->all());
            session()->flash('message','Registo actualizado exitosamente');
        }
        else
        {
            session()->flash('warning','no se encuentra el registro solicitado');
            return redirect()->route('observation.index');
        }
        return redirect()->route('observation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $observation = Observation::find($id);
        if($observation)
        {
            $observation->delete();
            session()->flash('message','Registo eliminado exitosamente');
        }
        else
        {
            session()->flash('warning','no se encuentra el registro solicitado');
            return redirect()->route('observation.index');
        }
        return redirect()->route('observation.index');
    }  
    
}
