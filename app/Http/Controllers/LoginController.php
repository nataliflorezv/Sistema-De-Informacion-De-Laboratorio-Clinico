<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\login;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logins = login::all(); 
        return view('login.loginbacteriologo')->with('logins',$logins);
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logins = new login();

        $logins->Documento = $request->get('Documento');
        $logins->Contraseña = $request->get('Contraseña');


        $logins->save();

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Documento)
    {
        $login = Patient::find($Documento); 
        return view('login.verificacion')->with('login',$login);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $documento)
    {
        $logins = login::find($documento);

        $logins->Documento = $request->get('Documento');
        $logins->Contraseña = $request->get('Contraseña');
        

        $logins->save();

        return redirect('/loginbacteriologo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
