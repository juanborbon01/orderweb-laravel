<?php

namespace App\Http\Controllers;
use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeactivity = TypeActivity::all(); //select from causal
        //dd($typeactivity);
        return view('type_actvity.index', compact('type_activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //insert into causal (description) values('xxxx')
            $typeactivity =TypeActivity::create($request->all());
            session()->flash('message','registro creado exitosamente');
            return redirect()->route('type_activity.index');
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
        $typeactivity = TypeActivity::find($id);
        if($typeactivity)
        {
         return view('type_activity.edit', compact('type_activity'));
        }
        else
        {
         return redirect()->route('type_activity.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeactivity = TypeActivity::find($id);
        if($typeactivity)
        {
            $typeactivity->update($request->all());
            session()->flash('message','Registo actualizado exitosamente');
        }
        else
        {
            session()->flash('warning','no se encuentra el registro solicitado');
            return redirect()->route('type_activity.index');
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeactivity = TypeActivity::find($id);
        if($typeactivity)
        {
            $typeactivity->delete();
            session()->flash('message','Registo eliminado exitosamente');
        }
        else
        {
            session()->flash('warning','no se encuentra el registro solicitado');
            return redirect()->route('type_activity.index');
        }
        return redirect()->route('type_activity.index');
    }
}
