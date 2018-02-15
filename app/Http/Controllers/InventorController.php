<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Profil;

use App\User;

use App\Http\Requests;

class InventorController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil=Auth::user()->id;
        return view('inventor.profil.index')->with(['profil'=>$profil]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventor=Auth::user()->profil;
        return view('inventor.profil.create')->with(['profil'=>$inventor]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $profil = new Profil();
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->email=$request->input('email');
        $profil->no_telp=$request->input('no_telp');
        $profil->judul=$request->input('inovasi');
        $profil->admin_id=Auth::user()->id;
        $user->name=$request->input('username');
        $user->password=bcrypt($request->input('password'));
        $user->email=$request->input('email');
        $user->role="inventor";
        $user->save();
        $profil->user_id=$user->id;
        $profil->save();
        return ([$profil,$user]);
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
        //
        $profil=Auth::user()->profil;
        return view('inventor.profil.edit')->with(['profil'=>$profil]);
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
        //
        $profil= Profil::find($id);
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'kabupaten'=>'required',
            'email'=>'required',
            'inovasi'=>'required'
        ]);
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->kabupaten=$request->input('kabupaten');
        $profil->email=$request->input('email');
        $profil->judul=$request->input('inovasi');
        $profil->save();
        return redirect('inventor/create')->with('success','Data Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
