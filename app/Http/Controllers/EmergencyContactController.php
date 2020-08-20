<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emergency_Contact_Info as Emergency;
class EmergencyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emergency_contacts= Emergency::all();
        return view('admin.emergency-contacts',compact('emergency_contacts'));
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
        $emergency_contact =New Emergency;
     $values= $request->all();
     foreach($values as $key =>$value){
        if ($key!='_token'){
$emergency_contact->$key=$value;
        }
     }
     $emergency_contact->save();
     return redirect(url('emergency-contact'))->with(['success'=>'Your information was saved successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page =['title'=>'Emergncy Contact'];
        $emergency= Emergency::find($id);
        return view('admin.emergency-contact-details', compact('emergency','page'));
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
        $item=Emergency::find($id);
        $item->delete();
        return redirect(url('admin/emergency-contacts'))->with(['success'=>'Item Deleted Successfully']);
    }
}
