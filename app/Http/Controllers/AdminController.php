<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Inventor;
use App\Profil;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventor=Auth::user()->admin->profil;
        return view('admin.index')->with(['inventors'=>$inventor]);
    }
    public function editinventor($id){
        $profil=Profil::find($id);
        return view('admin.editprofil')->with(['profil'=>$profil]);
    }
    public function updateprofil(Request $request, $id){
        $profil=Profil::find($id);
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->email=$request->input('email');
        $profil->no_telp=$request->input('no_telp');
        $profil->judul=$request->input('inovasi');
        $profil->save();
        return redirect('admin');
    }
    public function destroyprofil($id){
        $profil=Profil::find($id);
        $profil->delete();
        return redirect('admin');
    }
    public function cekproposal()
    {
        return view('admin.cekproposal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
