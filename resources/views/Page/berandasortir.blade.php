@extends('Layout/main')
@section('isi')
    <div>
        <nav class=" w-10/12 mx-auto py-14 flex justify-between">
            <div class=" flex ">
                <h1 class=" font-semibold text-3xl text-cyan-700">Apotek Merben</h1>
            </div>
            <div>
                @if (Session('role') == 0)
                    <ul class=" flex gap-8">
                        <li class=" font-semibold text-base text-cyan-700 bg-slate-200 py-2 px-4 rounded-xl"><a
                                href="/beranda">Beranda</a></li>
                        <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                                href="">Profile</a></li>
                        <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                                href="/datakategori">Data Kategori</a></li>
                        <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                                href="/dataproduk">Data Produk</a></li>
                        <li
                            class=" font-semibold text-base bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                            <a href="/logout">Log Out</a>
                        </li>
                    </ul>
                @elseif (Session('role') == 1)
                    <ul class=" flex gap-8">
                        <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                                href="/beranda">Beranda</a></li>
                        <li
                            class=" font-semibold text-base bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                            <a href="/logout">Log Out</a>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>
        @if (Session('role') == 1)
            <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
            <!-- This is an example component -->
            <div class=" w-10/12 mx-auto">
                <div class="max-w-2xl mx-auto">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." required>
                            <button type="submit"
                                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
                <div class=" flex mt-10 justify-center gap-12">
                    <a href="/beranda/1"
                        class=" bg-orange-500 text-white py-2 px-4 hover:bg-orange-700 rounded-xl">Sirup</a>
                    <a href="/beranda/3"
                        class=" bg-orange-500 text-white py-2 px-4 hover:bg-orange-700 rounded-xl">Kapsul</a>
                    <a href="/beranda/2"
                        class=" bg-orange-500 text-white py-2 px-4 hover:bg-orange-700 rounded-xl">Tablet</a>
                    <a href="/beranda/4" class=" bg-orange-500 text-white py-2 px-4 hover:bg-orange-700 rounded-xl">Pil</a>
                    <a href="/beranda" class=" bg-orange-500 text-white py-2 px-4 hover:bg-orange-700 rounded-xl">Semua</a>
                </div>
                <div class=" flex flex-wrap gap-16 flex-row justify-start mt-10">
                    @foreach ($sortir as $item)
                        <a href="/detail/{{ $item->nama_obat }}">
                            <div class=" w-[250px] h-[250px] border-2 border-cyan-800 mt-10 rounded-lg">
                                <img src="{{ asset('Gambar_obat/' . $item->gambar_obat) }}" class="w-[250px] h-[240px] mt-1"
                                    alt="">
                                <h1 class=" font-semibold text-xl mt-3">{{ $item->nama_obat }}</h1>
                                <p class=" font-medium text-lg">Harga Rp. <span>{{ $item->harga }}</span></p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
