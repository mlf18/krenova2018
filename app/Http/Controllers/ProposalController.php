<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;
use App\Admin;
use App\Inventor;
use App\Kuesinventor;
use App\Profil;
use Auth;
class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('proposal/create');
        // return view('inventor.map.index');
    }
    public function get($filename){
        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('proposal')->get($entry->filename);
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil=Auth::user()->profil;
        $admin=$profil->admin;
        if(isset($profil->inventor)){
            $inventor=$profil->inventor;
        }else{
            $inventor=[];
        }
        if (isset($profil->proposal)){
            $proposal=$profil->proposal;
        }else{
            $proposal=[];
        }
        if (isset($profil->kuesinventor)){
            $kuesinventor=$profil->kuesinventor;
        }else{
            $kuesinventor=[];
        }
        return view('inventor.proposal.create')->with(['profil'=>$profil,'admin'=>$admin,'kuesinventor'=>$kuesinventor,'proposal'=>$proposal,'inventor'=>$inventor]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil=Auth::user()->profil;
        $inventor=new Inventor();
        $inventor->kategori=$request->input('bidang_perorangan');
        $inventor->nama=$profil->nama;
        $inventor->alamat=$profil->alamat;
        $inventor->pekerjaan=$request->input('pekerjaan_perorangan');
        $inventor->email=$profil->email;
        $inventor->no_telp=$profil->no_telp;
        $inventor->kategori_kelompok=$request->input('bidang_kelompok');
        $inventor->nama_kelompok=$request->input('nama_kelompok');
        $inventor->nama_ketua=$request->input('ketua_kelompok');
        $inventor->alamat_kelompok=$request->input('alamat_kelompok');
        $inventor->email_kelompok=$request->input('alamat_email_kelompok');
        $inventor->no_telp_kelompok=$request->input('no_hp_kelompok');
        $inventor->anggota_1=$request->input('nama_anggota_kelompok');
        $inventor->anggota_2=$request->input('nama_anggota_kelompok_2');
        $inventor->anggota_3=$request->input('nama_anggota_kelompok_3');
        $inventor->anggota_4=$request->input('nama_anggota_kelompok_4');
        $inventor->temuan=$request->input('karya_usul_kelompok');
        $inventor->judul=$request->input('temuan_baru_kelompok');
        $inventor->pengembangan=$request->input('pengembangan_dari_kelompok');
        $inventor->profil_id=$profil->id;
        $inventor->save();
        // if($request->input('submit')=="draft-profil"){
        //     $temuan->draft=1;
        // }else{
        //     $temuan->draft=0;
        // }
        $temuan= new Kuesinventor();
        $temuan->temuan_asli=$request->input('temuan_asli');
        $temuan->waktu_produksi=$request->input('waktu_produksi');
        $temuan->sudah_ada=$request->input('orisinalitas_alat');
        $temuan->ide_orang=$request->input('orisinalitas_ide');
        $temuan->komersial=$request->input('implementasi_komersil');
        $temuan->komersial_pihak=$request->input('implementasi_pihak');
        $temuan->asal_usul=$request->input('implementasi_asal_usul');
        $temuan->penarapan=$request->input('penerapan_temuan');
        $temuan->pelaku_penerapan=$request->input('penerapan_pelaku');
        $temuan->cakupan_penerapan=$request->input('penerapan_cukupan');
        $temuan->bahan_lokal=$request->input('bahan_baku_lokal');
        $temuan->kapasitas_produksi=$request->input('manfaat_produktifitas');
        $temuan->tenaga_kerja=$request->input('manfaat_lapangan_kerja');
        $temuan->prospek_tempat=$request->input('komersil_dimana');
        $temuan->prospek_cara=$request->input('komersil_cara');
        $temuan->biaya_produksi=$request->input('komersil_biaya');
        $temuan->omset=$request->input('komersil_omset');
        $temuan->asal_bahan=$request->input('komersil_bahan_baku');
        $temuan->quantity_bahan=$request->input('komersil_banyak');
        $temuan->orientasi=$request->input('komersil_kebutuhan');
        $temuan->profil_id=$profil->id;
        $temuan->save();
        $proposal= new Proposal();
        $proposal->abstrak=$request->input('proposal_abstrak');
        $proposal->latar_belakang=$request->input('proposal_latar_belakang');
        $proposal->maksud=$request->input('proposal_maksud_tujuan');
        $proposal->manfaat=$request->input('proposal_manfaat');
        $proposal->spek_teknik=$request->input('proposal_spesifikasi');
        $proposal->keunggulan=$request->input('proposal_keunggulan');
        $proposal->penerapan=$request->input('proposal_penerapan');
        $proposal->biaya_produksi=$request->input('proposal_perhitungan');
        $proposal->prospek_bisnis=$request->input('proposal_prospek');
        // if($request->input('submit')=="draft-proposal"){
        //     $proposal->draft=1;
        // }else{
        //     $proposal->draft=0;
        // }
        $fileName=time().'.jpeg';
        $request->file('proposal_file_1')->move('file/', $fileName);
        $proposal->foto1_name=$fileName;
        if($request->hasFile('proposal_file_2')){
            $fileName=time().'.jpeg';
            $request->file('proposal_file_2')->move('file/', $fileName);
            $proposal->foto2_name=$fileName;
        }else{
            $proposal->foto2_name='';
        }
        if($request->hasFile('proposal_file_3')){
            $fileName=time().'.jpeg';
            $request->file('proposal_file_3')->move('file/', $fileName);
            $proposal->foto3_name=$fileName;
        }else{
            $proposal->foto3_name='';
        }
        if($request->hasFile('proposal_file_4')){
            $fileName=time().'.jpeg';
            $request->file('proposal_file_4')->move('file/', $fileName);
            $proposal->foto4_name=$fileName;
        }else{
            $proposal->foto4_name='';
        }
        $fileName=time().'.jpeg';
        $request->file('proposal_surat')->move('file/', $fileName);
        $proposal->suratpengantar_name=$fileName;
        // $fileName=time().'.jpeg';
        // $request->file('proposal_pendukung')->move('file/', $fileName);
        // $proposal->spk_name=$fileName;
        $fileName=time().'.jpeg';
        $request->file('proposal_pendukung')->move('file/', $fileName);
        $proposal->lampiran1_name=$fileName;
        if($request->hasFile('proposal_daftar_riwayat_1')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_1')->move('file/', $fileName);
            $proposal->lampiran2_name=$fileName;
        }else{
            $proposal->lampiran2_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_2')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_2')->move('file/', $fileName);
            $proposal->lampiran3_name=$fileName;
        }else{
            $proposal->lampiran3_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_3')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_3')->move('file/', $fileName);
            $proposal->lampiran4_name=$fileName;
        }else{
            $proposal->lampiran4_name='';
        }
        if($request->hasFile('proposal_daftar_riwayat_4')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_4')->move('file/', $fileName);
            $proposal->lampiran5_name=$fileName;
        }else{
            $proposal->lampiran5_name='';
        }
        $fileName=time().'.jpeg';
        $request->file('proposal_daftar_riwayat_hidup')->move('file/', $fileName);
        $proposal->riwayathidup_name=$fileName;
        $fileName=time().'.jpeg';
        $request->file('proposal_foto_ktp')->move('file/', $fileName);
        $proposal->ktp_name=$fileName;
        $proposal->status=1;
        $proposal->profil_id=$profil->id;
        $proposal->save();
        return redirect('/proposal/create')->with('success', 'Saved');
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