@extends('Layout/main')
@section('isi')
    <nav class=" w-10/12 mx-auto py-14 flex justify-between">
        <div class=" flex ">
            <h1 class=" font-semibold text-3xl text-cyan-700">Apotek Merben</h1>
        </div>
        <div>
            <ul class=" flex gap-8">
                <li class=" font-semibold text-base text-cyan-700 hover:bg-slate-200 py-2 px-4 rounded-xl"><a
                        href="/beranda">Beranda</a></li>
                <li class=" font-semibold text-base bg-amber-500 hover:bg-amber-700 text-white py-2 px-4 rounded-xl">
                    <a href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="w-10/12 mx-auto flex justify-end">
        <a href="/beranda">
            <div class=" w-[50px] h-[50px] bg-sky-500 rounded-full flex items-center justify-center hover:bg-cyan-700">
                <img src="{{ asset('Assets/Images/back.png') }}" class="w-[20px] h-[20px]" alt="">
            </div>
        </a>
    </div>
    <div class=" flex flex-wrap mt-14 w-10/12 mx-auto items-center justify-around">
        <div class=" w-6/12 flex justify-center">
            <img src="{{ asset('Gambar_obat/' . $detail->gambar_obat) }}" class="w-[400px] h-[400px]" alt="">
        </div>
        <div class=" w-6/12">
            <h1 class=" font-bold text-4xl text-cyan-500">{{ $detail->nama_obat }}</h1>
            <h3 class=" font-medium text-2xl my-3">Harga Rp. <span>{{ $detail->harga }}</span></h3>
            <p class=" w-9/12 font-normal text-lg mb-4">{{ $detail->data_obat }}</p>
            <div class="">
                <form action="/transaksiproses/{{ $detail->nama_obat }}" method="POST">
                    @csrf
                    <div class=" gap-4 flex items-center mb-5">
                        <input type="text" name="jumlah" id="jumlah"
                            class=" py-3 px-3 font-semibold text-base rounded-full border-2 border-cyan-600 w-[50px] h-[50px] text-center"
                            placeholder="0">
                        <label for="jumlah" class=" font-semibold text-lg">Masukkan Jumlah Belanja</label>
                    </div>
                    <div class=" flex items-center gap-5">
                        <button
                            class=" bg-orange-500 py-3 px-5 rounded-xl font-semibold text-white hover:bg-orange-700">Beli
                            Sekarang</button>
                        <div class=" flex items-center gap-5">
                            <p class=" font-semibold text-lg">Atau Hubungi Melalui</p>
                            <a href=""><img src="{{ asset('Assets/Images/wa.png') }}" class="w-[40px] h-[40px]"
                                    alt=""></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
