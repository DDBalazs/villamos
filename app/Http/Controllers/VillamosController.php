<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jaratok;
use App\Models\megallo;
use App\Models\utvonal;

class VillamosController extends Controller
{
    public function Mainpage(){
        return view('welcome', [
            'result'    => jaratok::all()
        ]);
    }

    public function Jaratok(){
        return view('jaratok', [
            'tramtrain' => jaratok::where('jarat_tipus',1)->get(),
            'villamos'  => jaratok::where('jarat_tipus',2)->get(),
            'trolibusz' => jaratok::where('jarat_tipus',3)->get()
        ]);
    }

    public function Jarat($id){
        return view('jarat', [
            'jarat' => jaratok::find($id),
            'megallok'  => utvonal::select('megallo.megallo_id','megallo.nev','utvonal.utirany')
                                    ->join('megallo','utvonal.megallo_id','megallo.megallo_id')
                                    ->where('utvonal.jarat_id',$id)
                                    ->get(),
            'sv_o'  =>1,
            'sv_v'  =>1
        ]);
    }

    public function Megallo($id){
        return view('megallo', [
            'nev'       => megallo::find($id),
            'jaratok'    => utvonal::select('jaratok.jaratok_id','jaratok.jaratszam','jaratok.hatterszin','jaratok.betuszin')
                                    ->distinct()
                                    ->join('jaratok','jaratok.jaratok_id','utvonal.jarat_id')
                                    ->where('utvonal.megallo_id',$id)
                                    ->get()
        ]);
    }

    public function Kereses(Request $req){
        $req->validate([
            'hiba'      => 'required|min:4'
        ],[
            'hiba.required' =>  'Nem lehet üres a keresőmező!',
            'hiba.min'      =>  'Legalább 4 karaktert adj meg!'

        ]);

        return view('kereses',[
            'result'    =>  megallo::where('nev', 'LIKE', '%'.$req->hiba.'%')
                                        ->get()
        ]);

    }
}
