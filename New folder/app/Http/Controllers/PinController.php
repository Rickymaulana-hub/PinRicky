<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Like;

class PinController extends Controller
{
    public function getdatapin(Request $request, $id){
        $dataUser = User::where('id', $id)->first();
        return response()->json([
            'dataUser'      => $dataUser
        ], 200);
    }

    public function getdata(Request $request){
        $explore = Foto::with('likefotos')->withCount(['likefotos', 'comments'])->where('user_id', $request->idUser)->paginate(4);
        return response()->json([
            'data' =>$explore,
            'statuscode' => 200,
            'idUser'     => auth()->user()->id
        ]);
    }

    public function likesfoto(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existingLike = Like::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->first();
            if(!$existingLike){
                $dataSimpan = [
                    'foto_id'  => $request->idfoto,
                    'user_id'  => auth()->user()->id
                ];
                Like::create($dataSimpan);
            } else {
                Like::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil si simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
    }
}
