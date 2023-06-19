<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getAllData()]);
    }
    public function create()
    {
        // tampilkan seluruh data dari table produk
        $produk = Produk::all();
        // tampilkan seluruh data dari table produk
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create',
        compact('pesanan','produk'));
    }
    public function store(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunakan parameter request
        //lalu masukkan ke dalam kolom table produk
        //save data yang sudah di ambil menggunakan parameter request dengan method
        // kembalikan ke tampilan view produk setelah mengklik button simpan
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id',$id)->get();
        return view('admin.pesanan.edit', compact('pesanan','produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunakan parameter request
        //lalu masukkan ke dalam kolom table produk
        //save data yang sudah di ambil menggunakan parameter request dengan method
        // kembalikan ke tampilan view produk setelah mengklik button simpan
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tabel produk
        // cari data yg ingin dihapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('pesanan')->where('id',$id)->delete();
        return redirect('admin/pesanan');
    }
}
