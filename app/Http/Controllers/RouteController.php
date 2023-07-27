<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RouteController extends Controller
{
    //
    public function beranda()
    {
        $produk = Obat::where('status', 1)->get();
        return view('Page.beranda', ['produk' => $produk]);
    }

    public function berandasortir($role_obat)
    {
        $sortir = Obat::where('role_obat', $role_obat)->where('status', 1)->get();
        return view('Page.berandasortir', ['sortir' => $sortir]);
    }

    public function dataproduk()
    {
        $produk = Obat::join('kategori', 'obat.role_obat', '=', 'kategori.role_obat')
            ->select('obat.*', 'kategori.kategori') // Mengambil semua kolom dari tabel "obat" dan kolom "kategori" dari tabel "kategori"
            ->get();
        return view('Page.dataproduk', ['produk' => $produk]);
    }

    public function destroy($nama_obat)
    {
        Obat::where('nama_obat', $nama_obat)->delete();
        $user = Obat::where('nama_obat', $nama_obat)->first();
        if ($user->gambar_obat) {
            Storage::delete('public/Gambar_obat/' . $user->gambar_obat);
        }
        return back()->with('Success', 'Berhasil Hapus Data');
    }

    public function datakategori()
    {
        $kategori = Kategori::all();
        return view('Page.datakategori', ['kategori' => $kategori]);
    }

    public function tambahdata()
    {
        return view('Page.tambahdata');
    }

    public function tambahkategori()
    {
        return view('Page.tambahkategori');
    }

    public function detail($nama_obat)
    {
        $detail = Obat::where('nama_obat', $nama_obat)->first();
        return view('Page.detail', ['detail' => $detail]);
    }

    public function edit($nama_obat)
    {
        $detail = Obat::where('nama_obat', $nama_obat)->first();
        return view('Page.editdata', ['detail' => $detail]);
    }

    public function dashboardadmin()
    {
        $total_obat = Obat::sum('stok_obat');
        $total_penjualan = Transaksi::sum('total_harga');
        return view('Page.dashboard', ['total_obat' => $total_obat, 'total_penjualan' => $total_penjualan]);
    }
}
