<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;
use App\Pengusul;
use App\Temuan;
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
        return redirect('proposals/create');
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
        $profil=Auth::user()->profils;
        $pengusul=$profil->pengusul;
        $temuan=$profil->temuans;
        $proposal=$profil->proposal;
        return view('inventor.proposal.create')->with(['profil'=>$profil,'pengusul'=>$pengusul,'temuan'=>$temuan,'proposal'=>$proposal]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil=Auth::user()->profils;
        $profil->kategori=$request->input('bidang_perorangan');
        $profil->alamat=$request->input('alamat_perorangan');
        $profil->pekerjaan=$request->input('pekerjaan_perorangan');
        $profil->email=$request->input('alamat_email_perorangan');
        $profil->no_telp=$request->input('no_telp_perorangan');
        $profil->kategori=$request->input('bidang_kelompok');
        $profil->alamat=$request->input('alamat_kelompok');
        $profil->email=$request->input('alamat_email_kelompok');
        $profil->no_telp=$request->input('no_hp_kelompok');
        $profil->anggota_1=$request->input('nama_anggota_kelompok');
        $profil->anggota_2=$request->input('nama_anggota_kelompok_2');
        $profil->anggota_3=$request->input('nama_anggota_kelompok_3');
        $profil->anggota_4=$request->input('nama_anggota_kelompok_4');
        $profil->temuan=$request->input('karya_usul_kelompok');
        $profil->judul=$request->input('temuan_baru_kelompok');
        $profil->pengembangan=$request->input('pengembangan_kelompok');
        $profil->save();
        if($request->input('submit')=="draft-profil"){
            $temuan->draft=1;
        }else{
            $temuan->draft=0;
        }
        $temuan= new Temuan();
        $temuan->temuan_asli=$request->input('temuan_asli');
        $temuan->waktu_produksi=$request->input('waktu_produksi');
        $temuan->sudah_ada=$request->input('orisinalitas_alat');
        $temuan->ide_orang=$request->input('orisinalitas_ide');
        $temuan->komersial=$request->input('implementasi_komersil');
        $temuan->komersial_pihak=$request->input('implementasi_pihak');
        $temuan->asal_usul=$request->input('implementasi_asal_usul');
        $temuan->penerapan=$request->input('penerapan_temuan');
        $temuan->pelaku_penerapan=$request->input('penerapan_pelaku');
        $temuan->cakupan_penerapan=$request->input('penerapan_cakupan');
        $temuan->bahan_lokal=$request->input('bahan_baku_lokal');
        $temuan->kapasitas_produk=$request->input('manfaat_produktifitas');
        $temuan->tenaga_kerja=$request->input('manfaat_lapangan_kerja');
        $temuan->prospek_tempat=$request->input('komersil_dimana');
        $temuan->prospek_cara=$request->input('komersil_cara');
        $temuan->prospek_biaya=$request->input('komersil_biaya');
        $temuan->omset=$request->input('komersil_omset');
        $temuan->asal_bahan=$request->input('komersil_bahan_baku');
        $temuan->quantity_bahan=$request->input('komersil_banyak');
        $temuan->orientasi=$request->input('komersil_kebutuhan');
        $temuan->profil_id=$profil->id;
        if($request->input('submit')=="draft-kuesioner"){
            $temuan->draft=1;
        }else{
            $temuan->draft=0;
        }
        $temuan->save();
        $proposal= new Proposal();
        $proposal->abstrak=$request->input('proposal_abstrak');
        $proposal->latar_belakang=$request->input('proposal_latar_belakang');
        $proposal->maksud=$request->input('proposal_maksud_tujuan');
        $proposal->manfaat=$request->input('proposal_manfaat');
        $proposal->kabupaten=$profil->kabupaten;
        $proposal->spek_teknik=$request->input('proposal_spesifikasi');
        $proposal->keunggulan=$request->input('proposal_keunggulan');
        $proposal->penerapan=$request->input('proposal_penerapan');
        $proposal->biaya_produksi=$request->input('proposal_perhitungan');
        $proposal->prospek_bisnis=$request->input('proposal_prospek');
        if($request->input('submit')=="draft-proposal"){
            $proposal->draft=1;
        }else{
            $proposal->draft=0;
        }
        $proposal->save();
        $fileName=time().'.pdf';
        $request->file('proposal_file_1')->move('file/', $fileName);
        if($request->hasFile('proposal_file_2')){
            $fileName=time().'.pdf';
            $request->file('proposal_file_2')->move('file/', $fileName);
        }
        if($request->hasFile('proposal_file_3')){
            $fileName=time().'.pdf';
            $request->file('proposal_file_3')->move('file/', $fileName);
        }
        if($request->hasFile('proposal_file_4')){
            $fileName=time().'.pdf';
            $request->file('proposal_file_4')->move('file/', $fileName);
        }
        $fileName=time().'.pdf';
        $request->file('proposal_surat')->move('file/', $fileName);
        $fileName=time().'.pdf';
        $request->file('proposal_pendukung')->move('file/', $fileName);
        $fileName=time().'.pdf';
        $request->file('proposal_daftar_riwayat')->move('file/', $fileName);
        if($request->hasFile('proposal_daftar_riwayat_2')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_2')->move('file/', $fileName);
        }
        if($request->hasFile('proposal_daftar_riwayat_3')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_3')->move('file/', $fileName);
        }
        if($request->hasFile('proposal_daftar_riwayat_4')){
            $fileName=time().'.pdf';
            $request->file('proposal_daftar_riwayat_4')->move('file/', $fileName);
        }
        $fileName=time().'.pdf';
        $request->file('proposal_daftar_riwayat_hidup')->move('file/', $fileName);
        $fileName=time().'.pdf';
        $request->file('proposal_foto_ktp')->move('file/', $fileName);
        return redirect('/proposals/create')->with('success', 'Saved');
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