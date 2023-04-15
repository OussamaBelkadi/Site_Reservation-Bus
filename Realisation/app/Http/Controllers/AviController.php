<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use Illuminate\Http\Request;

class AviController extends Controller
{
    public function save(Request $request){
        $request->validate([
            'avis'=> 'required|string',
            'note' => 'required|integer',
        ]);
        $avi = new Avi;
        $avi->avi = $request->avis;
        $avi->note = $request->note;
        $avi->save();
        return redirect()->route('index');

    }
}
