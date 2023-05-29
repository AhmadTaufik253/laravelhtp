<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use DB;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $divisi = Divisi::all();

        return view('admin.divisi.index', compact('divisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('divisi')->insert([
            'nama'=>$request->nama,
        ]);
        return redirect('/divisi');
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
        //
        $divisi = DB::table('divisi')->where('id', $id)->get();

        return view('admin.divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        DB::table('divisi')->where('id', $request->id)->update([
            'nama' => $request->nama,
        ]);

        return redirect('divisi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
