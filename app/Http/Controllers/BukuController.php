<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index' , compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new buku;
        return view('buku.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , rules:[
            'judul_buku' => 'required',
            'penerbit' => 'required',
            'pengarang' => ' required'
        ]);
        $model = new buku;
        $model->judul_buku = $request->judul_buku;
        $model->penerbit = $request->penerbit;
        $model->pengarang = $request->pengarang;
        $model->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = buku::find($id);
        return view('buku.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request , rules:[
            'judul_buku' => 'required',
            'penerbit' => 'required',
            'pengarang' => ' required'
        ]);
        $model = buku::find($id);
        $model->judul_buku = $request->judul_buku;
        $model->penerbit = $request->penerbit;
        $model->pengarang = $request->pengarang;
        $model->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(BUku $buku)
    {
        $buku->delete();
     
        return redirect()->route('buku.index')
                        ->with('success','Berhasil Hapus !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('login');
    }
}
