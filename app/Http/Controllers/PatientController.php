<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Patient::all();

        return view('patients.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'share_name'=>'required',
//            'share_price'=> 'required|integer',
//            'share_qty' => 'required|integer'
//        ]);
        $share = new Patient([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'sex'=> $request->get('sex'),
            'mobile'=> $request->get('mobile'),
            'email'=> $request->get('email')
        ]);
        $share->save();
        return redirect('/patients')->with('success', 'Stock has been added');
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
        $share = Patient::find($id);

        return view('patients.edit', compact('share'));
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
//        $request->validate([
//            'share_name'=>'required',
//            'share_price'=> 'required|integer',
//            'share_qty' => 'required|integer'
//        ]);

        $share = Patient::find($id);
        $share->first_name = $request->get('first_name');
        $share->last_name = $request->get('last_name');
        $share->sex= $request->get('sex');
        $share->mobile= $request->get('mobile');
        $share->email= $request->get('email');
        $share->save();

        return redirect('/patients')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Patient::find($id);
        $share->delete();

        return redirect('/patients')->with('success', 'Stock has been deleted Successfully');
    }
}
