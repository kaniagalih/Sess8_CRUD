<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) //menampilkan semua data
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if(strlen($katakunci)){
            $data = member::where('id','like',"%$katakunci%")
                ->orWhere('nama','like',"%katakunci%")
                ->orWhere('type','like',"%katakunci%")
                ->paginate($jumlahbaris);
        }else{
            $data = member::orderBy('id', 'asc')->paginate($jumlahbaris);
        }
        return view('member.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //menampilkan form
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //memasukkan data ke dataset
    {
        Session::flash('id', $request->id);
        Session::flash('nama', $request->nama);
        Session::flash('id', $request->id);

        $request->validate([
            'id'=>'required|numeric|unique:member,id',
            'nama'=>'required',
            'type'=>'required',
        ], [
            'id.required'=>'id is required',
            'id.numeric'=>'id must be in numerical form',
            'id.unique'=>'id already exists in the database!',
            'nama.required'=>'nama is required',
            'type.required'=>'Tipe Member is required',
        ]);
        $data = [
            'id'=>$request->id,
            'nama'=>$request->nama,
            'type'=>$request->type,
        ];
        member::create($data);
        return redirect()->to('member')->with('success', 'Your Data Addedd Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //menampilkan detail data
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //form edit
    {
        $data = member::where('id', $id)->first();
        return view('member.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //simpan update data
    {
        $request->validate([
            'nama'=>'required',
            'type'=>'required',
        ], [
            'nama.required'=>'nama is required',
            'type.required'=>'Tipe Member is required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'type'=>$request->type,
        ];
        member::where('id', $id)->update($data);
        return redirect()->to('member')->with('success', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //hapus data 
    {
        member::where('id', $id)->delete();
        return redirect()->to('member')->with('success', 'Delete Data Successfully');
    }
}
