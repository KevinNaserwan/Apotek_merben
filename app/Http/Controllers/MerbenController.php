<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class MerbenController extends Controller
{
    //
    public function StoreDataObat(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'gambar_obat' => 'required',
            'data_obat' => 'required',
            'role_obat' => 'required',
            'harga' => 'required',
            'stok_obat' => 'required'
        ], [
            'nama_obat' => 'File wajib diisi',
            'data_obat' => 'Tujuan wajib diisi',
            'gambar_obat' => 'Keterangan wajib diisi',
            'role_obat' => 'Role wajib diisi',
            'harga' => 'Harga wajib diisi',
            'stok_obat' => 'Stok Obat wajib diisi'
        ]);

        $foto_file = $request->file('gambar_obat');
        $foto_nama = $request->input('nama_obat') . "." . $request->file('gambar_obat')->getClientOriginalExtension();
        $foto_file->move(public_path('Gambar_obat'), $foto_nama);
        $data = [
            'nama_obat' => $request->input('nama_obat'),
            'gambar_obat' => $foto_nama,
            'data_obat' => $request->input('data_obat'),
            'role_obat' => $request->input('role_obat'),
            'harga' => $request->input('harga'),
            'stok_obat' => $request->input('stok_obat'),
            'status' => $request->input('status'),
        ];

        // dd($data);
        Obat::create($data);
        return redirect('/tambahdata')->with('success', 'Berhasil Tambah Obat Baru');
    }

    public function EditDataObat(Request $request, $nama_obat)
    {
        $request->validate([
            // Add validation rules for other fields if needed
        ]);

        // Get the existing data for the given nama_obat
        $obat = Obat::where('nama_obat', $nama_obat)->first();
        if (!$obat) {
            return redirect('/tambahdata')->with('error', 'Obat tidak ditemukan.');
        }

        // Handle the updated image if a new one is provided
        if ($request->hasFile('gambar_obat')) {
            $foto_file = $request->file('gambar_obat');
            $foto_nama = $request->input('nama_obat') . "." . $request->file('gambar_obat')->getClientOriginalExtension();
            $foto_file->move(public_path('Gambar_obat'), $foto_nama);
            $obat->gambar_obat = $foto_nama;
        }

        // Update the data fields
        $obat->nama_obat = $request->input('nama_obat');
        $obat->data_obat = $request->input('data_obat');
        $obat->role_obat = $request->input('role_obat');
        $obat->harga = $request->input('harga');
        $obat->stok_obat = $request->input('stok_obat');
        $obat->status = $request->input('status');

        // Save the updated data
        $obat->update();

        // Return a response
        return redirect('/dataproduk')->with('success', 'Berhasil Edit Data Obat');
    }

    public function StoreKategoriObat(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'role_obat' => 'required',
        ], [
            'kategori' => 'File wajib diisi',
            'role_obat' => 'Tujuan wajib diisi',
        ]);

        $data = [
            'kategori' => $request->input('kategori'),
            'role_obat' => $request->input('role_obat')
        ];

        // dd($data);
        Kategori::create($data);
        return redirect('/tambahkategori')->with('success', 'Berhasil Tambah Obat Baru');
    }

    // public function penjualan(Request $request, $nama_obat)
    // {
    //     $request->validate([
    //         'jumlah' => 'required'
    //     ], [
    //         'jumlah' => 'Harap Masukkan Jumlah Order'
    //     ]);

    //     $obat = Obat::where('nama_obat', $nama_obat)->first();
    //     $total_harga = $obat->harga * $request->input('jumlah');
    //     $data = [
    //         'jumlah' => $request->input('jumlah'),
    //         'nama_obat' => $obat->nama_obat,
    //         'total_harga' => $total_harga,
    //         'role_transaksi' => 1,
    //         'waktu_transaksi' => date('Y-m-d H:i:s')
    //     ];
    //     // dd($data);
    //     Transaksi::create($data);
    //     return redirect('/beranda')->with('Success', 'Berhasil Melakukan Pembelian');
    // }

    public function penjualan(Request $request, $nama_obat)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1'
        ], [
            'jumlah.required' => 'Harap Masukkan Jumlah Order',
            'jumlah.integer' => 'Jumlah Order harus berupa angka',
            'jumlah.min' => 'Jumlah Order minimal 1'
        ]);

        $obat = Obat::where('nama_obat', $nama_obat)->first();

        if (!$obat) {
            return back()->withErrors(['nama_obat' => 'Obat tidak ditemukan']);
        }

        // Periksa apakah stok cukup untuk orderan
        if ($obat->stok_obat < $request->input('jumlah')) {
            return back()->withErrors(['jumlah' => 'Stok obat tidak mencukupi']);
        }

        $total_harga = $obat->harga * $request->input('jumlah');

        // // Update stok obat pada tabel Obat
        // $obat->stok_obat -= $request->input('jumlah');
        // $obat->save();

        Obat::where('nama_obat', $nama_obat)->update(['stok_obat' => $obat->stok_obat - $request->input('jumlah')]);
        $data = [
            'jumlah' => $request->input('jumlah'),
            'nama_obat' => $obat->nama_obat,
            'total_harga' => $total_harga,
            'role_transaksi' => 1,
            'waktu_transaksi' => date('Y-m-d H:i:s')
        ];

        Transaksi::create($data);

        return redirect('/beranda')->with('success', 'Berhasil Melakukan Pembelian');
    }

}
