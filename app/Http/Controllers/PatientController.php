<?php

namespace App\Http\Controllers;

use App\Model\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return compact('patients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'require|min:3|max:64'
        ],[
            'first_name.min' => 'نام باید حداقل 3 کاراکتر باشد'
        ]);
        $patient = Patient::create($request->all());
        if(isset($patient))
            return response()->json(['massage'=>'patient created successfully'],200);
        return response()->json(['massage'=>'patient caanot be created'],402);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        
        if(isset($patient))
            return $patient;
        return response()->json(['massage'=>'patient not found'],404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('patients.show',[$id]);
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
        $request->validate([
            'first_name'=>'require|min:3|max:64'
        ],[
            'first_name.min' => 'نام باید حداقل 3 کاراکتر باشد'
        ]);
        $patient = Patient::find($id);
        if(isset($patient)){
            $patient->update($request->all());
            return response()->json(['massage'=>'patient created successfully'],200);
        }
        return response()->json(['massage'=>'patient caanot be created'],402);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        if(isset($patient)){
            $patient->delete();
            return response()->json(['massage'=>'patient deleted successfully'],200);
        }
        return response()->json(['massage'=>'patient not found'],404);
    }
}
