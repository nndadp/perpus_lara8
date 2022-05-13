<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Students::all();
        return view('students.index' , compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model =  Students::all();
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        return view('students.create', compact('model' , $model , 'rombel' , $rombel , 'rayon' , $rayon));
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
            'nis' => 'required|min:8|max:8',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jk' => 'required'
        ]);
        $model = new Students();
        $model->nis = $request->nis;
        $model->nama = $request->nama;
        $model->rombel = $request->rombel;
        $model->rayon = $request->rayon;
        $model->jk = $request->jk;
        $model->save();

        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayo  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Students::find($id);
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        return view('Students.edit',  compact('model' , $model , 'rombel' , $rombel , 'rayon' , $rayon));
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
            'nis' => 'required|min:8|max:8',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jk' => 'required'
        ]);
        $model = Students::find($id);
        $model->nis= $request->nis;
        $model->nama = $request->nama;
        $model->rombel = $request->rombel;
        $model->rayon = $request->rayon;
        $model->jk = $request->jk;
        $model->save();

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        $students->delete();
     
        return redirect()->route('students.index')
                        ->with('success','Berhasil Hapus !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('login');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $student = Students::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('students.index', compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}