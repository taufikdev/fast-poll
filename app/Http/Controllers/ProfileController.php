<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil=Profil::all();
        return $profil->tojson(JSON_FORCE_OBJECT );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Profil::create([
            'id_acc' => $request['id_acc'],
            'id_add' => $request['id_add'],
            'description' => $request['description'],
            'experience' => $request['experience'],
            
        ]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profil=Profil::findOrFail($id);
        
        return $profil->tojson(JSON_FORCE_OBJECT );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profil=Profil::findOrFail($id);
        
        $profil->update([
            'id_acc' => $request['id_acc']      ?$request['id_acc']: $profil['id_acc'],
            'id_add' => $request['id_add']  ?$request['id_add']: $profil['id_add'],
            'description' => $request['description']        ?$request['description']: $profil['description'],
            'experience' => $request['experience']          ?$request['experience']: $profil['experience'],
            
        ]);
        return $profil->tojson(JSON_FORCE_OBJECT );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil=Profil::findOrFail($id);
        $profil->delete();
    }
}
