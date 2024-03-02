<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function editfoto(Request $request, $id){
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        $foto = Foto::find($id);

        return view('pages.edit-foto', compact('user', 'albums', 'foto'));
    }

    public function editpostingan(Request $request, $id){
        $foto = Foto::find($id);

        $data_foto = [
        'judul_foto'            =>$request->judul_baru,
        'deskripsi_foto'        =>$request->deskripsi_baru
       
        ];

        

        $foto->update($data_foto);
        
        return redirect()->back()->with('success','Postingan Berhasil Di Perbaharui');

    }

    public function hapuspostingan($id){
        $foto  = Foto::find($id);
        $foto  ->delete();

        return redirect()->back()->with('succes','Postingan Berhasil Di Hapus');
    }
}
