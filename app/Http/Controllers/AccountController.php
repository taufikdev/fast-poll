<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Exception\ConnectException;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts=Account::all();
        return $accounts->tojson(JSON_FORCE_OBJECT );
       
       
    }

    //     public function useapi(){
    // $accounts=Http::get('http://api.meteo-concept.com/api/ephemeride/0?token=7e2e4813cc314004491ac5f5a5e9383296af505798994a137b48637ed8ea7578

    // ');
    
    // dd($accounts);

    //     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path= $request->file('photo')?$request->file('photo')->store('Docs'):NULL;
 
        return Account::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phon' => $request['phon'],
            'type' => $request['type'],
            'photo' => $path,
            'mail' => $request['mail'],
            'password' => Hash::make($request['password']),
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
        $account=Account::findOrFail($id);
        
        return $account->tojson(JSON_FORCE_OBJECT );
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
        
        $account=Account::findOrFail($id);
       if($request->hasFile('photo'))
       dd('ghh');
        else
        dd('ttttt');
        // $account->update([
        //     'first_name' => $request['first_name']?$request['first_name']: $account['first_name'],
        //     'last_name' => $request['last_name']  ?$request['last_name']: $account['last_name'],
        //     'Phon' => $request['Phon']            ?$request['Phon']: $account['Phon'],
        //     'type' => $request['type']            ?$request['type']: $account['type'],
        //     'mail' => $request['mail']            ?$request['mail']: $account['mail'],
        //     'password' => $request['password']    ?Hash::make($request['password']): Hash::make($account['password']),
        // ]);
        // return $account->tojson(JSON_FORCE_OBJECT );
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account=Account::findOrFail($id);
        $account->delete();

        return 'deleted';
        
    }
}
