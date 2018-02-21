<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Inventor;
use App\Profil;
use App\User;
use App\Kuesadmin;
use App\Draftadmin;
use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $admin=Auth::user()->admin;
        $drafts=Draftadmin::where('admin_id','=',$admin->id)->get();
        return view('admin.index')->with('drafts',$drafts);
    }
    public function adminprofil(Request $request){
        $admin=Auth::user()->admin;
        $admin->nama=$request->input('nama');
        $admin->pekerjaan=$request->input('jabatan');
        $admin->lembaga=$request->input('lembaga');
        $admin->alamat=$request->input('alamat');
        $admin->kabupaten=$request->input('kabupaten');
        $admin->no_telp=$request->input('no_telepon');
        // return ([$admin]);
        $admin->save();
        return redirect('admin');
    }
    public function draft($id){
        $draft=Draftadmin::find($id);
        return view('admin.draft')->with('draft',$draft);
    }
    public function datainventor()
    {
        $profil=Auth::user()->admin;
        // return ([$profil]);
        return view('admin.datainventor')->with(['admins'=>$profil]);
    }
    public function editinventor($id){
        $profil=Profil::find($id);
        return view('admin.editprofil')->with(['profil'=>$profil]);
    }
    public function reviewproposal(){
        $profils=Auth::user()->admin;
        // foreach($profils as $profil){
        //     return $profil->judul;
        // }
        // return ([$profils]);
        return view('admin.reviewproposal')->with('profils',$profils);
    }
    public function lihatproposal($id){
        $profil=Profil::find($id);
        $admin=$profil->admin;
        $inventors=$profil->inventor;
        $proposals=$profil->proposal;
        $kuesinventor=$profil->kuesinventor;
        
        foreach ($inventors as $inventor){

        }
        foreach ($proposals as $proposal){

        }
        return view('admin.lihatproposal')->with(['profil'=>$profil,'proposal'=>$proposal,'kuesinventor'=>$kuesinventor,'admin'=>$admin,'inventor'=>$inventor]);
    }
    public function approveproposal(Request $request, $id){
        $profil=Profil::find($id);
        $inventors=Profil::find($id)->inventor;
        foreach($inventors as $inventor){

        }
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
        $temuan=$profil->kuesinventor;
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
        $proposals=Profil::find($id)->proposal;
        foreach($proposals as $proposal){
            
        }
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
        if($request->hasFile('proposal_file_1')){
            $fileName='proposal_file_1_'.time().'.'.$request->file('proposal_file_1')->getClientOriginalExtension();
            $request->file('proposal_file_1')->move('file/', $fileName);
            $proposal->foto1_name=$fileName;
        }
        if($request->hasFile('proposal_file_2')){
            $fileName='proposal_file_2'.time().'.'.$request->file('proposal_file_2')->getClientOriginalExtension();
            $request->file('proposal_file_2')->move('file/', $fileName);
            $proposal->foto2_name=$fileName;
        }
        if($request->hasFile('proposal_file_3')){
            $fileName='proposal_file_3_'.time().'.'.$request->file('proposal_file_3')->getClientOriginalExtension();
            $request->file('proposal_file_3')->move('file/', $fileName);
            $proposal->foto3_name=$fileName;
        }
        if($request->hasFile('proposal_file_4')){
            $fileName='proposal_file_4'.time().'.'.$request->file('proposal_file_4')->getClientOriginalExtension();
            $request->file('proposal_file_4')->move('file/', $fileName);
            $proposal->foto4_name=$fileName;
        }
        if($request->hasFile('proposal_surat')){
            $fileName='proposal_surat_'.time().'.'.$request->file('proposal_surat')->getClientOriginalExtension();
            $request->file('proposal_surat')->move('file/', $fileName);
            $proposal->suratpengantar_name=$fileName;
        }
        // $fileName=time().'.jpeg';
        // $request->file('proposal_pendukung')->move('file/', $fileName);
        // $proposal->spk_name=$fileName;
        if($request->hasFile('proposal_pendukung')){
            $fileName='proposal_pendukung_'.time().'.'.$request->file('proposal_pendukung')->getClientOriginalExtension();
            $request->file('proposal_pendukung')->move('file/', $fileName);
            $proposal->lampiran1_name=$fileName;
        }
        if($request->hasFile('proposal_daftar_riwayat_1')){
            $fileName='proposal_daftar_riwayat_2_'.'.'.time().$request->file('proposal_daftar_riwayat_1')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_1')->move('file/', $fileName);
            $proposal->lampiran2_name=$fileName;
        }
        if($request->hasFile('proposal_daftar_riwayat_2')){
            $fileName='proposal_daftar_riwayat_2_'.'.'.time().$request->file('proposal_daftar_riwayat_2')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_2')->move('file/', $fileName);
            $proposal->lampiran3_name=$fileName;
        }
        if($request->hasFile('proposal_daftar_riwayat_3')){
            $fileName='proposal_daftar_riwayat_3_'.'.'.time().$request->file('proposal_daftar_riwayat_3')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_3')->move('file/', $fileName);
            $proposal->lampiran4_name=$fileName;
        }
        if($request->hasFile('proposal_daftar_riwayat_4')){
            $fileName='proposal_daftar_riwayat_4_'.'.'.time().$request->file('proposal_daftar_riwayat_4')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_4')->move('file/', $fileName);
            $proposal->lampiran5_name=$fileName;
        }
        if($request->hasFile('proposal_daftar_riwayat_hidup')){
            $fileName='proposal_daftar_riwayat_hidup_'.'.'.time().$request->file('proposal_daftar_riwayat_hidup')->getClientOriginalExtension();
            $request->file('proposal_daftar_riwayat_hidup')->move('file/', $fileName);
            $proposal->riwayathidup_name=$fileName;
        }
        if($request->hasFile('proposal_foto_ktp')){
            $fileName='proposal_foto_ktp_'.time().'.'.$request->file('proposal_foto_ktp')->getClientOriginalExtension();
            $request->file('proposal_foto_ktp')->move('file/', $fileName);
            $proposal->ktp_name=$fileName;
        }
        $proposal->status=1;
        $proposal->profil_id=$profil->id;
        $proposal->save();
        return redirect('admin');
        // $inventor=Profil::find($id);        
        
        // if($request->input('submit')=="draft-profil"){
        //     $temuan->draft=1;
        // }else{
        //     $temuan->draft=0;
        // }
        // if (isset($profil->kuesinventor)){
        //     $temuan=$profil->kuesinventor;
        // }else{
        //     $temuan = new Kuesinventor();
        // }
        
        // if (isset($profil->proposal)){
        //     $proposal=$profil->proposal;
        // }else{
        //     $proposal = new Proposal();
        // }
        
    }
    public function dataproposal()
    {
        $profils=Auth::user()->admins;

        return view('admin.dataproposal', compact('profils'));
    }
    public function updateprofil(Request $request, $id){
        $profil=Profil::find($id);
        $user=User::find($profil->user_id);
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->email=$request->input('email');
        $profil->kabupaten=$request->input('kabupaten');
        $profil->no_telp=$request->input('no_telp');
        $profil->judul=$request->input('inovasi');
        $user->email=$request->input('email');
        $profil->save();
        $user->save();
        return redirect('admin/datainventor');
    }
    public function deletesprofil($id){
        $profil=Profil::find($id);
        $user=User::find($profil->user_id);
	if(isset($profil->kuesinventor)){
		$profil->kuesinventor->delete();
	}
	if (isset($profil->inventor)){
		$profil->inventor->delete();
	}
	if(isset($profil->proposal)){
		$profil->proposal->delete();
	}
        $profil->delete();
        $user->delete();
        return redirect('admin/datainventor');
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
        $admin=Auth::user()->admin;
        return view('admin.create')->with('admin',$admin);
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
