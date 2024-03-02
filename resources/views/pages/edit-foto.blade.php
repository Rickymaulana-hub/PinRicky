@extends('include.master')
@section ('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    <form action="/edit-postingan/{{$foto->id}}" method="POST" enctype="multipart/form-data">
        @csrf
    <section class="mt-10">
        <div class="flex justify-center">
    @if ($message = Session::get('success'))
                <div id="alert-1" class="flex items-center p-4 mb-3 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-sm font-medium ms-3">
                      {{ $message }}
                    </div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                @endif
           </div>
        <div class="max-w-screen-md mx-auto flex justify-center">
            
                <div class="w-2/5  max-[480px]:w-full px-2">
                    <div class="flex flex-col flex-wrap">
                        <h3>Judul</h3>
                        <input type="text" name="judul_baru" id="" class="py-1 rounded-full border-slate-500" value="{{$foto->judul_foto}}">
                        <h3 class="mt-4">Deskripsi</h3>
                        <input type="text" name="deskripsi_baru" id="" class="py-1 rounded-full border-slate-500" value="{{$foto->deskripsi_foto}}">
                            
                            <h3>Album</h3>
                            <select name="album" id="">
                                @foreach ($albums as $album)
                                <option value="{{$album->id}}"->{{$album->nama_album}}</option>
                                @endforeach
                            <input type="hidden" name="" id="" class="py-1 rounded-full border-slate-500">
                        <div class="flex flex-row justify-between">
                            <div></div>
                            <button class="px-6 py-1 mt-4 text-white rounded-md bg-blue-500">upload</button>
                        </div>


                           
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection