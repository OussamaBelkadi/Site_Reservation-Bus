<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Societe;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $societe = Societe::all();
        return view('admin.dashboardAdm' , ['societes'=>$societe]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'image'=>'requered|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         'name'=> 'requered|max:150',
        //     ]
        //     );

            $societe = new Societe;
            $societe->name = $request->name;
            $societe->image = $request->image;
            $societe->save();
            dd($societe);
    }

    public function list(){
        $societes = Societe::all();
        return view('listsociete', ['societes'=>$societes]);
    }

    public function saved(Request $request)
    {
        // $request->validate(
        //     [
        //         'image'=>'requered|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         'name'=> 'requered|max:150',
        //     ]
        //     );
        $societe = new Societe;
        $image = $request->image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/image', $name);
            
            $societe->name = $request->name;
            $societe->image = $name;
            $societe->save();
            return redirect()->route('societe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Societe::destroy($id);
        return redirect()->route('societe.index');
    }
    public function desplay(string $id){
        $societe = Societe::where('id', $id)->first();
        return view('admin.Societe', ['societe'=>$societe]);
    }
}
