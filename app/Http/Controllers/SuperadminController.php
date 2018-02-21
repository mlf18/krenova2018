<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profil;
use App\Proposal;
class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils=Proposal::where('status', '1')->get();

        $counts=Proposal::where('status', '1')->count();

        $unaproves=Proposal::where('status', '0')->count();
        // return ($profils);
        $profilunapproves=Proposal::where('status', '0')->get();
        return view ('superadmin.index', compact('profils', 'counts','unaproves','profilunapproves'));
    }

    public function listproposal()
    {
        $profils = Profil::all();

        return view('superadmin.proposal.listproposal', compact('profils')); 
    }

    public function publishproposal()
    {
        $profils = Profil::all();

        return view('superadmin.publish.publishproposal', compact('profils')); 
    }

    public function vote()
    {
        $profils = Profil::all();

        return view('superadmin.vote.vote', compact('profils')); 
    }

    public function pemenang()
    {
        $profils = Profil::all();

        return view('superadmin.pemenanglomba.pemenang', compact('profils')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.profil');
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
