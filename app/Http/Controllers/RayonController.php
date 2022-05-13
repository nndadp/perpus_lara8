<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rayon = rayon::all();
        return view('rayon.index' , compact('rayon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new rayon;
        return view('rayon.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, rules: [
            'rayon' => 'required',
            'pembingbing' => 'required',
            'no_telp' => 'required'
        ]);
        $model = new rayon;
        $model->rayon = $request->rayon;
        $model->pembingbing = $request->pembingbing;
        $model->no_telp = $request->no_telp;
        $model->save();

        return redirect('rayon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(Rayon $rayon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = rayon::find($id);
        return view('rayon.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, rules: [
            'rayon' => 'required',
            'pembingbing' => 'required',
            'no_telp' => 'required'
        ]);
        $model = Rayon::find($id);
        $model->rayon = $request->rayon;
        $model->pembingbing = $request->pembingbing;
        $model->no_telp = $request->no_telp;
        $model->save();

        return redirect('rayon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rayon $rayon)
    {
        $rayon->delete();
     
        return redirect()->route('rayon.index')
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