<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions= Admission::all();
        return view('admin.admissions',compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admission =New Admission;
     $values= $request->all();
     foreach($values as $key =>$value){
        if ($key!='_token'){
$admission->$key=$value;
        }
     }
     $admission->save();
     return redirect(url('admission'))->with(['success'=>'Admission was successful']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page =['title'=>'Admissions'];
        $admission= Admission::find($id);

        return view('admin.admission-details', compact('admission','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
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
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Admission::find($id);
        $item->delete();
        return redirect(url('admin/admissions'))->with(['success'=>'Item Deleted Successfully']);
    }
}
