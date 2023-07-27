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
                    class=" font-semibold text-base  bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
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
                            <p class="font-medium text-lg">Ubah Data Obat</p>
                            <p>Harap Isi Semua Formnya</p>
                        </div>
                        <div class="lg:col-span-2">
                            <form method="POST" action="/editdataproses/{{$detail->nama_obat}}" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="nama_obat">Nama Obat</label>
                                        <input type="text" name="nama_obat" id="nama_obat"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $detail->nama_obat }}"
                                            placeholder="{{ $detail->nama_obat }}" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="gambar_obat">Gambar Obat</label>
                                        <input type="file" name="gambar_obat" id="gambar_obat"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 py-2" value="{{ $detail->gambar_obat }}"
                                            placeholder="{{ $detail->gambar_obat }}" />
                                    </div>
                                    <div class="md:col-span-3">
                                        <label for="data_obat">Keterangan Obat</label>
                                        <input type="text" name="data_obat" id="data_obat"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $detail->data_obat }}"
                                            placeholder="{{ $detail->data_obat }}" />
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="harga">Harga</label>
                                        <input type="text" name="harga" id="harga"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $detail->harga }}"
                                            placeholder="{{ $detail->harga }}" />
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="country">Jenis Obat</label>
                                        <div class="">
                                            <select class="h-10 border mt-1 rounded px-3 w-full bg-gray-50" id="grid-state"
                                                name="role_obat" id="role_obat">
                                                <option value="1">Sirup</option>
                                                <option value="2">Tablet</option>
                                                <option value="3">Kapsul</option>
                                                <option value="4">Pil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:col-span-5">
                                        <div class="inline-flex items-center mt-2">
                                            <input type="checkbox" name="status" id="status" class="form-checkbox"
                                                value="1" />
                                            <label for="status" class="ml-2">Status Obat Aktif</label>
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="stok_obat">Berapa Stok yang ingin dimasukkan</label>
                                        <div
                                            class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <button tabindex="-1" for="show_more"
                                                class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600"
                                                onclick="decrementValue()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <input name="stok_obat" id="stok_obat" placeholder="{{ $detail->stok_obat }}"
                                                class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                                value="{{ $detail->stok_obat }}" />
                                            <button tabindex="-1" for="show_more"
                                                class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600"
                                                onclick="incrementValue()">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
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
    <script>
        function incrementValue() {
            var inputElement = document.getElementById("soda");
            var currentValue = parseInt(inputElement.value);
            inputElement.value = currentValue + 1;
        }

        function decrementValue() {
            var inputElement = document.getElementById("soda");
            var currentValue = parseInt(inputElement.value);

            // Cek apakah nilai saat ini lebih besar dari 0 sebelum mengurangi
            if (currentValue > 0) {
                inputElement.value = currentValue - 1;
            }
        }
    </script>
@endsection
