<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function storeAlbum(Request $request){
        $request->validate([
            'nama_album'    => 'required',
            'deskripsi'     => 'required'
        ]);

        $fotoFile = $request->file('foto');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName   = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/assets'), $fotoName);

        $dataAlbum = [
            'nama_album'    => $request->nama_album,
            'deskripsi'     => $request->deskripsi,
            'foto'          => $fotoName,
            'user_id'       => Auth::user()->id,
        ];

        Album::create($dataAlbum);
        return redirect()->back()->with('success', 'Album Berhasil Di Buat');
    }

    public function detail($id){
        $user = auth()->user();
        $fotos = Foto::where('album_id', $id)->where('user_id', Auth::user()->id)->get();
        $album = Album::where('id', $id)->first();

        return view('pages.detail-album', compact('fotos', 'album', 'user'));



    }


}
