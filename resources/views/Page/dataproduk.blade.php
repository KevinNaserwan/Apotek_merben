@extends('Layout/main')
@section('isi')
    <!-- component -->
    <nav class=" w-10/12 mx-auto py-14 flex justify-between">
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
                <li class=" font-semibold text-base  bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                    <a href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container px-4 mx-auto w-10/12">
        <a href="/tambahdata">
            <div class=" bg-cyan-700 w-[15%] h-[50px] rounded-xl mb-6 flex justify-center items-center hover:bg-cyan-900">
                <img src="Assets/Images/plus.png" class=" w-7 h-7 ml-3" alt="">
                <a href="/tambahdata" class=" font-medium text-lg text-white m-4">Tambah Data</a>
            </div>
        </a>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Kategori
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Nama Produk
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Harga
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Gambar
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Stok
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                @foreach ($produk as $index => $item)
                                    <tr>
                                        <td
                                            class="px-4 py-4 text-base font-medium  text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span></span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $item->kategori }}</td>
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $item->nama_obat }}
                                        </td>
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            Rp. {{ $item->harga }}
                                        </td>
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <img src="Gambar_obat/{{ $item->gambar_obat }}" class=" w-24 h-24 rounded-md"
                                                alt="">
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            @if ($item->status == 1)
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-base font-medium">Aktif</h2>
                                                </div>
                                            @elseif ($item->status == 0)
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-sm font-normal">Tidak Aktif</h2>
                                                </div>
                                            @endif
                                        </td>
                                        <td
                                            class="px-4 py-4 text-base font-medium text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $item->stok_obat }}</td>
                                        <td class="px-4 py-4 text-base font-medium whitespace-nowrap">
                                            <div class="flex items-center gap-x-6">
                                                <a href="/edit/{{ $item->nama_obat }}"
                                                    class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-blue-300 hover:text-indigo-500 focus:outline-none">
                                                    Edit
                                                </a>
                                                <form action="/delete/{{ $item->nama_obat }}" method="POST">
                                                    @method('delete');
                                                    @csrf
                                                    <button
                                                        class="text-red-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden md:flex gap-x-3">
                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
                <a href="#"
                    class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div> --}}
    </section>
@endsection
