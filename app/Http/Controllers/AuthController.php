<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Método para autenticar o usuário.
     */
    public function login()
    {
        return view('login'); // Carrega a view login.blade.php.
    }

    /**
     * Método para submeter o login do usuário.
     */
    public function loginSubmit(Request $request)
    {
        echo "Submetendo o login do usuário.";
        dd($request->all());
    }

    /**
     * Método para deslogar o usuário.
     */
    public function logout()
    {
        echo "Logout de acesso.";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
}
