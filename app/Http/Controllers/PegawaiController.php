<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Divisi;
use DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawai = Pegawai::join('divisi', 'pegawai.divisi_id', '=', 'divisi.id')
            ->join('jabatan', 'pegawai.jabatan_id', '=', 'jabatan.id')
            ->select('pegawai.*', 'divisi.nama as divisi', 'jabatan.nama as jabatan')
            ->get();

        // $jabatan = Jabatan::all();
        // $divisi = Divisi::all();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        $divisi = Divisi::all();
        $pegawai = Pegawai::join('divisi', 'pegawai.divisi_id', '=', 'divisi.id')
            ->join('jabatan', 'pegawai.jabatan_id', '=', 'jabatan.id')
            ->select('pegawai.*', 'divisi.nama as divisi', 'jabatan.nama as jabatan')
            ->get();

            return view('admin.pegawai.create', compact('pegawai','jabatan','divisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(!empty($request->foto)){
            $fileName = 'foto-'.$request->id.'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/image')/$fileName);
        } else {
            $fileName = ' ';
        }

        DB::table('pegawai')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan,
            'divisi_id' => $request->divisi,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'foto' => $fileName,
        ]);

        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
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
        // ini akan diarahkan ke file edit yang ada di view 
        // menggunakan query builder
        
        $pegawai = DB::table('pegawai')->where('id', $id)->get();

        return view('admin.pegawai.edit', compact('pegawai'));
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
