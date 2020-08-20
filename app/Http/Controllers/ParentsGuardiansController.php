<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParentsGuardians;
class ParentsGuardiansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentguardians= ParentsGuardians::all();
        return view('admin.parents-guardians',compact('parentguardians'));
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
        $pg =New ParentsGuardians;
     $values= $request->all();
     foreach($values as $key =>$value){
        if ($key!='_token'){
$pg->$key=$value;
        }
     }
     $pg->save();
     return redirect(url('parents-guardians'))->with(['success'=>'Your Message has been successfully stored']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page =['title'=>'Parent Guardian Information'];
        $pg= ParentsGuardians::find($id);
        return view('admin.parents-guardians-details', compact('pg','page'));
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
        $item=ParentsGuardians::find($id);
        $item->delete();
        return redirect(url('admin/parents-guardians'))->with(['success'=>'Item Deleted Successfully']);
    }
}
