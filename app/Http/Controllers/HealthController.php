<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Health;
class HealthController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healths= Health::all();
        return view('admin.health',compact('healths'));
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
        $health =New Health;
     $values= $request->all();
     foreach($values as $key =>$value){
        if ($key!='_token'){
$health->$key=$value;
        }
     }
     $health->save();
     return redirect(url('health'))->with(['success'=>'Your information was recorded successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page =['title'=>'Health'];
        $health= Health::find($id);
        return view('admin.health-details', compact('health','page'));
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
        $item=Health::find($id);
        $item->delete();
        return redirect(url('admin/health'))->with(['success'=>'Item Deleted Successfully']);
    }
}
