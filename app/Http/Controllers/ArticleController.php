<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article=Article::all();
        return view('superadmin.berita')->with(['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.tambahberita');
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
        $article= new Article();
        $article->judul=$request->input('judul');
        $article->isi=$request->input('isi_berita');
        $article->kategori=$request->input('kategori');
        // $fileName="berita_".time().".jpeg";
        // $request->file('gambar')->move('file/',$fileName);
        // $article->gambar=$fileName;
        $article->save();
        return redirect('berita');
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
        $article=Article::find($id);
        return view('superadmin.editberita')->with(['article'=>$article]);
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
        $article= Article::find($id);
        $article->judul=$request->input('judul');
        $article->isi=$request->input('isi_berita');
        $article->kategori=$request->input('kategori');
        // $fileName="berita_".time().".jpeg";
        // $request->file('gambar')->move('file/',$fileName);
        // $article->gambar=$fileName;
        $article->save();
        return redirect('berita');
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
        $article=Article::find($id);
        $article->delete();
        return redirect('berita');
    }
}
