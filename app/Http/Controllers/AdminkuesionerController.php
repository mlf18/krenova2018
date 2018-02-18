<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kuesadmin;
use App\Draftadmin;
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
        if($request->input('submit')!='draft'){
        $adminkues=new Kuesadmin();
        $adminkues->alokasi_anggaran= $request->input('alokasi_anggaran');
        $adminkues->perda=$request->input('perda');
        if($request->hasFile('lampiranperda1_name')){
            $fileName='lampiranperda1_'.time().'.'.$request->file('lampiranperda1_name')->getClientOriginalExtension();
            $request->file('lampiranperda1_name')->move('file/', $fileName);
            $adminkues->lampiranperda1_name=$fileName;
        }else{
            $adminkues->lampiranperda1_name='';
        }
        if($request->hasFile('lampiranperda2_name')){
            $fileName='lampiranperda2_'.time().'.'.$request->file('lampiranperda2_name')->getClientOriginalExtension();
            $request->file('lampiranperda2_name')->move('file/', $fileName);
            $adminkues->lampiranperda2_name=$fileName;
        }else{
            $adminkues->lampiranperda2_name="";
        }
        $adminkues->mou=$request->input('mou');
        if($request->hasFile('lampiranmou1_name')){
            $fileName='lampiranmou1_'.time().'.'.$request->file('lampiranmou1_name')->getClientOriginalExtension();
            $request->file('lampiranmou1_name')->move('file/', $fileName);
            $adminkues->lampiranmou1_name=$fileName;
        }else{
            $adminkues->lampiranmou1_name='';
        }
        if($request->hasFile('lampiranmou2_name')){
            $fileName='lampiranmou2_'.time().'.'.$request->file('lampiranmou2_name')->getClientOriginalExtension();
            $request->file('lampiranmou2_name')->move('file/', $fileName);
            $adminkues->lampiranmou2_name=$fileName;
        }else{
            $adminkues->lampiranmou2_name="";
        }
        if($request->hasFile('lampiranmou3_name')){
            $fileName='lampiranmou3_'.time().'.'.$request->file('lampiranmou3_name')->getClientOriginalExtension();
            $request->file('lampiranmou3_name')->move('file/', $fileName);
            $adminkues->lampiranmou3_name=$fileName;
        }else{
            $adminkues->lampiranmou3_name="";
        }
        $adminkues->lombakab=$request->input('lombakab');
        $adminkues->pamerankab=$request->input('pamerankab');
        $adminkues->jumlah_lombakab=$request->input('jumlah_lombakab');
        if($request->hasFile('lampiranjumlah_lombakab')){
            $fileName='lampiranjumlah_lombakab_'.'.'.time().$request->file('lampiranjumlah_lombakab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_lombakab')->move('file/', $fileName);
            $adminkues->lampiranlomba_name=$fileName;
        }else{
            $adminkues->lampiranlomba_name='';
        }
        $adminkues->jumlah_pamerankab=$request->input('jumlah_pamerankab');
        if($request->hasFile('lampiranjumlah_pamerankab')){
            $fileName='lampiranjumlah_pamerankab_'.'.'.time().$request->file('lampiranjumlah_pamerankab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_pamerankab')->move('file/', $fileName);
            $adminkues->lampiranpameran_name=$fileName;
        }else{
            $adminkues->lampiranpameran_name='';
        }
        $adminkues->admin_id=Auth::user()->admin->id;
        $adminkues->nama_kabupaten=Auth::user()->admin->kabupaten;
        $draft=Draftadmin::where('admin_id','=',$adminkues->admin_id);
        $adminkues->save();
        $draft->delete();
        }else{
        $adminkues=new Draftadmin();
        $adminkues->alokasi_anggaran= $request->input('alokasi_anggaran');
        $adminkues->perda=$request->input('perda');
        if($request->hasFile('lampiranperda1_name')){
            $fileName='lampiranperda1_'.time().'.'.$request->file('lampiranperda1_name')->getClientOriginalExtension();
            $request->file('lampiranperda1_name')->move('file/', $fileName);
            $adminkues->lampiranperda1_name=$fileName;
        }else{
            $adminkues->lampiranperda1_name='';
        }
        if($request->hasFile('lampiranperda2_name')){
            $fileName='lampiranperda2_'.time().'.'.$request->file('lampiranperda2_name')->getClientOriginalExtension();
            $request->file('lampiranperda2_name')->move('file/', $fileName);
            $adminkues->lampiranperda2_name=$fileName;
        }else{
            $adminkues->lampiranperda2_name="";
        }
        $adminkues->mou=$request->input('mou');
        if($request->hasFile('lampiranmou1_name')){
            $fileName='lampiranmou1_'.time().'.'.$request->file('lampiranmou1_name')->getClientOriginalExtension();
            $request->file('lampiranmou1_name')->move('file/', $fileName);
            $adminkues->lampiranmou1_name=$fileName;
        }else{
            $adminkues->lampiranmou1_name='';
        }
        if($request->hasFile('lampiranmou2_name')){
            $fileName='lampiranmou2_'.time().'.'.$request->file('lampiranmou2_name')->getClientOriginalExtension();
            $request->file('lampiranmou2_name')->move('file/', $fileName);
            $adminkues->lampiranmou2_name=$fileName;
        }else{
            $adminkues->lampiranmou2_name="";
        }
        if($request->hasFile('lampiranmou3_name')){
            $fileName='lampiranmou3_'.time().'.'.$request->file('lampiranmou3_name')->getClientOriginalExtension();
            $request->file('lampiranmou3_name')->move('file/', $fileName);
            $adminkues->lampiranmou3_name=$fileName;
        }else{
            $adminkues->lampiranmou3_name="";
        }
        $adminkues->lombakab=$request->input('lombakab');
        $adminkues->pamerankab=$request->input('pamerankab');
        $adminkues->jumlah_lombakab=$request->input('jumlah_lombakab');
        if($request->hasFile('lampiranjumlah_lombakab')){
            $fileName='lampiranjumlah_lombakab_'.'.'.time().$request->file('lampiranjumlah_lombakab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_lombakab')->move('file/', $fileName);
            $adminkues->lampiranlomba_name=$fileName;
        }else{
            $adminkues->lampiranlomba_name='';
        }
        $adminkues->jumlah_pamerankab=$request->input('jumlah_pamerankab');
        if($request->hasFile('lampiranjumlah_pamerankab')){
            $fileName='lampiranjumlah_pamerankab_'.'.'.time().$request->file('lampiranjumlah_pamerankab')->getClientOriginalExtension();
            $request->file('lampiranjumlah_pamerankab')->move('file/', $fileName);
            $adminkues->lampiranpameran_name=$fileName;
        }else{
            $adminkues->lampiranpameran_name='';
        }
        $adminkues->admin_id=Auth::user()->admin->id;
        $adminkues->nama_kabupaten=Auth::user()->admin->kabupaten;
        $adminkues->save();
        }
        return redirect('admin');
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
