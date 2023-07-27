@extends('Layout/main')
@section('isi')
    <!-- component -->
    <nav class=" w-10/12 mx-auto py-8 flex justify-between">
        <div class=" flex ">
            <h1 class=" font-semibold text-3xl text-cyan-700">Apotek Merben</h1>
        </div>
        <div>
            <ul class=" flex gap-8">
                <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="/beranda">Beranda</a></li>
                <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="">Profile</a></li>
                <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="/datakategori">Data Kategori</a></li>
                <li class=" font-semibold text-base text-cyan-700 bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="/dataproduk">Data Produk</a></li>
                <li
                    class=" font-semibold text-base bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                    <a href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Menambahkan Kategori Obat Baru</p>
                            <p>Harap Isi Semua Formnya</p>
                        </div>
                        <div class="lg:col-span-2">
                            <form method="POST" action="/tambahkategoriproses" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="kategori">Kategori Obat</label>
                                        <input type="text" name="kategori" id="kategori"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Masukkan Kategori Obat" required />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="role_obat">Kode Obat</label>
                                        <input type="text" name="role_obat" id="role_obat"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 py-2" value=""
                                            placeholder="isi dengan angka" required />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
