<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rombel = rombel::all();
        return view('rombel.index' , compact('rombel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new rombel;
        return view('rombel.create', compact('model'));
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
            'rombel' => 'required'
        ]);
        $model = new rombel;
        $model->rombel = $request->rombel;
        $model->save();

        return redirect('rombel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Rombel::find($id);
        return view('rombel.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $this->validate($request, rules: [
            'rombel' => 'required'
        ]);
        $model = Rombel::find($id);
        $model->rombel = $request->rombel;
        $model->save();

        return redirect('rombel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rombel $rombel)
    {
        $rombel->delete();
     
        return redirect()->route('rombel.index')
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
