<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use PhpParser\Comment\Doc;
use Carbon\Carbon;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Doctor::all();

        return view('doctors.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
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
        $share = new Doctor([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'sex'=> $request->get('sex'),
            'mobile'=> $request->get('mobile'),
            'email'=> $request->get('email'),
            //'start_work'=> $request->get('start_work'),
            'start_work'=>Carbon::now(),
           // 'finish_work'=> $request->get('finish_work'),
            'finish_work'=>Carbon::now(),
            'vacation'=> $request->get('vacation')
        ]);
        $share->save();
        return redirect('/doctors')->with('success', 'Doctor has been added');
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
        $share = Doctor::find($id);

        return view('doctors.edit', compact('share'));
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

       // dd($request->all());
        $share = Doctor::find($id);
        $share->first_name = $request->get('first_name');
        $share->last_name = $request->get('last_name');
        $share->sex= $request->get('sex');
        $share->mobile= $request->get('mobile');
        $share->email= $request->get('email');
        //$share->start_work= $request->get('start_work');
        $share->start_work=Carbon::now();
        //$share->finish_work= $request->get('finish_work');

        $share->vacation= $request->get('vacation');

        $share->finish_work= Carbon::now();
        $share->save();

        return redirect('/doctors')->with('success', 'Doctor has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Doctor::find($id);
        $share->delete();

        return redirect('/doctors')->with('success', 'Stock has been deleted Successfully');
    }
}
