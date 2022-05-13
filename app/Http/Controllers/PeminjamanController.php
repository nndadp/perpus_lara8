<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Rayon;
use App\Models\Students;
use App\Models\Rombel;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulir = Peminjaman::all();
        return view('formulir.index' , compact('formulir'));
    }
    public function status(Peminjaman $formulir)
    {
        return view('formulir.status' , compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model =  Peminjaman::all();
        $buku = Buku::all();
        $rayon =  Rayon::all();
        $rombel =  Rombel::all();
        $students =  Students::all();
        return view('formulir.create', compact('model' , $model , 'buku', $buku , 'rayon' , $rayon , 'rombel' , $rayon , 'students' , $students));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , rules: [
            'nis' => 'required',
            'nama_peminjam' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jk' => 'required',
            'judul_buku' => 'required',
            'tgl_kembali' => 'required'
        ]);
        $model = new Peminjaman();
        $model->nama_peminjam = $request->nama_peminjam;
        $model->judul_buku = $request->judul_buku;
        $model->tgl_pinjam = Carbon::now();
        $model->tgl_kembali = $request->tgl_kembali;
        $model->petugas = $request->petugas;
        $model->nis = $request->nis;
        $model->rombel = $request->rombel;
        $model->rayon = $request->rayon;
        $model->jk = $request->jk;
        $model->status = $request->status;
        $model->save();

        return redirect('formulir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $formulir)
    {
        return view('formulir.show' , compact('formulir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Peminjaman::find($id);
        $buku = Buku::all();
        $rayon =  Rayon::all();
        $rombel =  Rombel::all();
        $students =  Students::all();
        return view('formulir.edit', compact('model' , $model , 'buku', $buku , 'rayon' , $rayon , 'rombel' , $rayon , 'students' , $students));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , rules: [
            'petugas' => 'required'
        ]);
        $model = Peminjaman::find($id);
        $model->nama_peminjam = $request->nama_peminjam;
        $model->judul_buku = $request->judul_buku;
        $model->tgl_pinjam = carbon::now();
        $model->tgl_kembali = $request->tgl_kembali;
        $model->petugas = $request->petugas;
        $model->nis = $request->nis;
        $model->rombel = $request->rombel;
        $model->rayon = $request->rayon;
        $model->jk = $request->jk;
        $model->status = $request->status;
        $model->save();

        return redirect('formulir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $formulir)
    {
        $formulir->delete();
     
        return redirect()->route('formulir.index')
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