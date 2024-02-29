@extends('include.master')
@section('content')


    <section class="mt-28">
        <div>
            <a href="/album"><button class="px-3 py-1 bg-slate-200 rounded-md ml-8"><-</button></a>
        </div>
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Detai Album</h3>
            <p class="text-center font-serif mt-4">{{$album->deskripsi}}</p>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">
                @foreach ($fotos as $foto)

                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/explore-detail/{{ $foto->id }}">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('/assets/'.$foto->url)}}" alt="" class="w-full transition duration-500 hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        {{$foto->judul_foto}}
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        {{$foto->created_at}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div>
                                <small>40</small>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
                                <button type="button" class="bi bi-heart" onclick="like()" id="love"></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection
