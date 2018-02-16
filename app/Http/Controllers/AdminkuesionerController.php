<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kuesadmin;
use Auth;
class AdminkuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuesioner');
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
        $adminkues=new Kuesadmin();
        $adminkues->alokasi_anggaran= $request->input('alokasi_anggaran');
        $adminkues->perda=$request->input('perda');
        $fileName='lampiranperda1_'.time().'.jpeg';
        $request->file('lampiranperda1_name')->move('file/', $fileName);
        $adminkues->lampiranperda1_name=$fileName;
        if($request->hasFile('lampiranperda2_name')){
            $fileName='lampiranperda2_'.time().'.jpeg';
            $request->file('lampiranperda2_name')->move('file/', $fileName);
            $adminkues->lampiranperda2_name=$fileName;
        }else{
            $adminkues->lampiranperda2_name="";
        }
        $adminkues->mou=$request->input('mou');
        $fileName='lampiranmou1_'.time().'.jpeg';
        $request->file('lampiranmou1_name')->move('file/', $fileName);
        $adminkues->lampiranmou1_name=$fileName;
        if($request->hasFile('lampiranmou2_name')){
            $fileName='lampiranmou2_'.time().'.jpeg';
            $request->file('lampiranmou2_name')->move('file/', $fileName);
            $adminkues->lampiranmou2_name=$fileName;
        }else{
            $adminkues->lampiranmou2_name="";
        }
        if($request->hasFile('lampiranmou3_name')){
            $fileName='lampiranmou3_'.time().'.jpeg';
            $request->file('lampiranmou3_name')->move('file/', $fileName);
            $adminkues->lampiranmou3_name=$fileName;
        }else{
            $adminkues->lampiranmou3_name="";
        }
        $adminkues->lombakab=$request->input('lombakab');
        $adminkues->pamerankab=$request->input('pamerankab');
        $adminkues->jumlah_lombakab=$request->input('jumlah_lombakab');
        $fileName='lampiranjumlah_lombakab_'.time().'.jpeg';
        $request->file('lampiranjumlah_lombakab')->move('file/', $fileName);
        $adminkues->lampiranlomba_name=$fileName;
        $adminkues->jumlah_pamerankab=$request->input('jumlah_pamerankab');
        $fileName='lampiranjumlah_pamerankab_'.time().'.jpeg';
        $request->file('lampiranjumlah_pamerankab')->move('file/', $fileName);
        $adminkues->lampiranpameran_name=$fileName;
        $adminkues->admin_id=Auth::user()->admin->id;
        $adminkues->nama_kabupaten=Auth::user()->admin->kabupaten;
        $adminkues->save();
        return ([$adminkues]);
        // $adminkues->save();
        // return redirect('adminadminkuesioner/create');
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
