<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address=Address::all();
        return $address->tojson(JSON_FORCE_OBJECT );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Address::create([
            'ville' => $request['ville'],
            'zipcode' => $request['zipcode'],
            'long' => $request['long'],
            'lat' => $request['lat'],
            
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
        $address=Address::findOrFail($id);
        
        return $address->tojson(JSON_FORCE_OBJECT );
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
        $address=Address::findOrFail($id);
        
        $address->update([
            'ville' => $request['ville']      ?$request['ville']: $address['ville'],
            'zipcode' => $request['zipcode']  ?$request['zipcode']: $address['zipcode'],
            'long' => $request['long']        ?$request['long']: $address['long'],
            'lat' => $request['lat']          ?$request['lat']: $address['lat'],
            
        ]);
        return $address->tojson(JSON_FORCE_OBJECT );
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Address::findOrFail($id);
        $address->delete();
    }
}
