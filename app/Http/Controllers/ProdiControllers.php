<?php

namespace App\Http\Controllers;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;


class ProdiControllers extends Controller
{
    public function index(){

        $data = Prodi::all();

       return view('prodi.index')->with('datafakultas', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $fakultas = Fakultas::all();

        $fakultas = Fakultas::orderBy('nama_fakultas','ASC')->get();

        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->nama_prodi);
        $validateData =$request->validate([
            'nama_prodi' => 'required|unique:prodi',
            'fakultas_id' => 'required',
        ]);
        // dd($validateData);

        $prodi = new Prodi();
        $prodi->nama_prodi = $validateData['nama_prodi'];
        $prodi->fakultas_id = $validateData['fakultas_id'];
        $prodi->save();

        return redirect()->route('prodi.index')->with('success',"Data".$validateData['nama_prodi']. "berhasil disimpan");

    }

    /**
     * Display the specified resource..
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}   
