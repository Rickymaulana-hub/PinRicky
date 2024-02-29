@extends('include.master')
@section('content')


    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Album</h3>
        </div>
    </section>
    <div class="ml-72 mt-4">
        <a href="/buatalbum"><button class="px-3 py-1 bg-green-300 rounded-md text-white">+Buat Album</button></a>
    </div>
    <section class="mt-8">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">

                @foreach ($albums as $album)

                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detailalbum/{{ $album->id }}">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('/assets/'.$album->foto)}}" alt="" class="w-full transition duration-500 hover:scale-105">
                            </div>
                        </a>
                        <div class="text-center font-semibold shadow-xl">
                            {{ $album->nama_album }}
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    @endsection
