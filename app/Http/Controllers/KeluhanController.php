<?php

namespace App\Http\Controllers;

use App\KeluhanModel;
use Illuminate\Http\Request;
use App\CustomerModel;

class KeluhanController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=KeluhanModel::get();
        return view('tampil_keluhan',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_keluhan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data['data']=CustomerModel::where($id);
        KeluhanModel::create([
            'Id_Keluhan' => null,
            'Detail_Keluhan' => $request->detail_keluhan,
            'Id_Customer' =>  $request->id_customer, //
            'Id_WorkOrder' =>  null,
        ]);
        return redirect()->route('c_keluhan.index');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=KeluhanModel::where($id);
        return view('detail_keluhan',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=KeluhanModel::where($id);
        return view('formedit_keluhan',$data);
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
        KeluhanModel::find($id)->update(['Detail_Keluhan'=>$request->detail_keluhan]);
        return redirect()->route('c_keluhan.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=KeluhanModel::find($id)->value('id');
        KeluhanModel::find($id)->delete();
        return redirect()->route('diagnosa.show',$temp)->with('message', 'Data berhasil di hapus');
    }
}
