<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    'nama_layanan' => 'unique:tb_layanan,nama_layanan',
                ],
                [
                    'nama_layanan.unique' => 'data sudah ada'
                ]
            );
            Layanan::create([
                'nama_layanan' => $request->nama_layanan,
                'harga_per_kg' => $request->harga_per_kg
            ]);
            return redirect('/layanan');

        } catch (\Exception $th) {
            return back()->with('error', $th->getMessage())->withInput();
        }



        //    Layanan::create([
        //     'nama_layanan' => $request -> nama_layanan,
        //     'harga_per_kg' => $request -> harga_per_kg
        //    ]);
        return redirect('/layanan')->with('tambah', 'Data Berhasil Ditambah');
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
        $layananz = Layanan::where('id_layanan', $id)->first();
        return view('layanan.edit', compact('layananz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Layanan::where(
            'id_layanan',
            $id
        )->update([
                    'nama_layanan' => $request->nama_layanan,
                    'harga_per_kg' => $request->harga_per_kg,
                ]);
        return redirect('/layanan')->with('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Layanan::where('id_layanan', $id)->delete();
        return redirect('/layanan')->with('delete', 'Data Berhasil Dihapus');
    }
}
