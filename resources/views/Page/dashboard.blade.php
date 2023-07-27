@extends('layout/main')
@section('isi')
    <nav class="py-6 flex px-14 justify-between border-b-2">
        <div class=" flex ">
            <h1 class=" font-semibold text-3xl text-cyan-700">Apotek Merben</h1>
        </div>
        <div>
            <ul class=" flex gap-8">
                <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="/beranda">Beranda</a></li>
                <li class=" font-semibold text-base  bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                    <a href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class=" flex">
        <div class=" w-2/12 pt-2 border-r-2 h-[700px]">
            <ul>
                <li class=" text-center py-4">
                    <a href=""
                        class=" border-b-2 font-semibold text-xl hover:bg-slate-400 py-2 px-3 rounded-xl">Dashboard</a>
                </li>
                <li class=" text-center py-4">
                    <a href=""
                        class="border-b-2 font-semibold text-xl hover:bg-slate-400 py-2 px-3 rounded-xl">Information</a>
                </li>
                <li class=" text-center py-4">
                    <a href=""
                        class="border-b-2 font-semibold text-xl hover:bg-slate-400 py-2 px-3 rounded-xl">Menu</a>
                </li>
            </ul>
        </div>
        <div class=" w-10/12 flex m-10 gap-9">
            <div class=" w-[300px] h-[200px] border-2 border-slate-600 bg-yellow-400">
                <div class=" mt-12">
                    <h1 class=" font-bold text-5xl pl-8">{{ $total_obat }}</h1>
                    <p class=" font-semibold text-xl mt-14 pt-1 pl-8 w-full border-t-2 border-slate-600">Jumlah Obat</p>
                </div>
            </div>
            <div class=" w-[300px] h-[200px] border-2 border-slate-600 bg-green-400">
                <div class=" mt-12">
                    <h1 class=" font-bold text-5xl pl-8">600</h1>
                    <p class=" font-semibold text-xl mt-14 pt-1 pl-8 w-full border-t-2 border-slate-600">Jumlah Pembelian
                    </p>
                </div>
            </div>
            <div class=" w-[300px] h-[200px] border-2 border-slate-600 bg-blue-400">
                <div class=" mt-12">
                    <h1 class=" font-bold text-3xl pl-8">Rp. {{ $total_penjualan }}</h1>
                    <p class=" font-semibold text-xl mt-16 pt-1 pl-8 w-full border-t-2 border-slate-600">Jumlah Penjualan
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
