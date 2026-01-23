<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Layanan;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        $layanans = Layanan::all();
        return view ('transaksi.index',compact('transaksis','layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $layanan = Layanan::all();
        return view ('transaksi.create',compact('layanan'));
    }

    public function bayar( Request $request, string $id){
        $transaksi = Transaksi::where('id_transaksi',$id)->first();
        $transaksi -> pembayaran = "Lunas";
        $transaksi -> save();
        return redirect ('/transaksi')->with('tambah'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'waktu_transaksi' => $request -> waktu_transaksi,
            'nama_pelanggan' => $request -> nama_pelanggan,
            'id_layanan' => $request -> id_layanan,
            'berat' => $request -> berat,
            'keterangan' => $request -> keterangan,
            'pembayaran' => 'Belum Bayar',
        ]);
        return redirect ('/transaksi');
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
        $transaksiz = Transaksi::where('id_transaksi', $id)->first();
        $layanans = Layanan::all();
        return view ('transaksi/edit',compact('transaksiz','layanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Transaksi::where('id_transaksi',$id
        )->update([
            'waktu_transaksi' => $request -> waktu_transaksi,
            'nama_pelanggan' => $request -> nama_pelanggan,
            'id_layanan' => $request -> id_layanan,
            'berat' => $request -> berat,
            'keterangan' => $request -> keterangan,
            'pembayaran' => $request -> pembayaran,
        ]);
        return redirect('/transaksi')->with('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Transaksi::where('id_transaksi',$id)->delete();
        return redirect ('/transaksi')->with('delete');
    }

    public function struk(string $id){
        $transaksiw = Transaksi::where('id_transaksi', $id)->first();
        return view ('transaksi.struk',compact('transaksiw'));
    }
}
