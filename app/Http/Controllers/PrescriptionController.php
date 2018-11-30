<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Prescription::all();

        return view('prescriptions.index', compact('shares'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prescriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $share = new Prescription([
            'patient_id' => $request->get('patient_id'),
        'doctor_id' => $request->get('doctor_id'),
        'description' => $request->get('description'),
        ]);
        $share->save();
        return redirect('/prescriptions')->with('success', 'Prescription has been added');
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
        $share = Prescription::find($id);

        return view('prescriptions.edit', compact('share'));
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
        $share = Prescription::find($id);
        $share->patient_id = $request->get('patient_id');
        $share->doctor_id = $request->get('doctor_id');
        $share->description= $request->get('description');
        $share->save();

        return redirect('/prescriptions')->with('success', 'Prescription has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Prescription::find($id);
        $share->delete();

        return redirect('/prescriptions')->with('success', 'Prescription has been deleted Successfully');
    }
}
