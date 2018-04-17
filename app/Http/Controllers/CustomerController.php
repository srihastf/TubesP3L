<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        $data['data']=CustomerModel::get();
        return view('customer\tampil_customer',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer\form_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CustomerModel::create([
            'Id_Customer' => null,
            'Nama_Customer' => $request->nama_customer,
            'Alamat' => $request->alamat,
            'Status' => 'customer',
        ]);

        $data['data']=CustomerModel::where($request->id_customer);
        return view('customer\profil_customer',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=CustomerModel::where($id);
        return view('customer\profil_customer',$data); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=CustomerModel::where($id);
        return view('customer\formedit_customer',$data);
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
        CustomerModel::find($id)->update(['Nama_Customer'=>$request->nama_customer]);
        CustomerModel::find($id)->update(['Alamat'=>$request->alamat]);
        return redirect()->route('c_customer.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=CustomerModel::find($id)->value('id_customer');
        KeluhanModel::find($id)->delete();
        return redirect()->route('c_customer.index',$temp);
    }
}
