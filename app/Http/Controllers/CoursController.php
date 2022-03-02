<?php

namespace App\Http\Controllers;
use App\Models\Cour;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cours=Cour::all();
        return $Cours->tojson(JSON_FORCE_OBJECT );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'jfhskf';
        return Cour::create([
            'Title' => $request['Title'],
            
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
        $cour=Cour::findOrFail($id);
        
        return $cour->tojson(JSON_FORCE_OBJECT );
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
        $cour=Cour::findOrFail($id);

        $cour->update([
            'Title' => $request['Title'],
            
        ]);
       // return $account->tojson(JSON_FORCE_OBJECT );
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cour=Cour::findOrFail($id);
        $cour->delete();

        return 'deleted';
    }
}
