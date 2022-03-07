<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Account::create([
            'First_Name' => $request['First_Name'],
            'Last_Name' => $request['Last_Name'],
            'Phon' => $request['Phon'],
            'Type' => $request['Type'],
            'Mail' => $request['Mail'],
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

        $account->update([
            'First_Name' => $request['First_Name'],
            'Last_Name' => $request['Last_Name'],
            'Phon' => $request['Phon'],
            'Type' => $request['Type'],
            'Mail' => $request['Mail'],
            'password' =>  Hash::make($request['password']),
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
        $account=Account::findOrFail($id);
        $account->delete();

        return 'deleted';
        
    }
}
