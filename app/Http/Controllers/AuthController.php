<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Método para login de acesso.
     */
    public function login()
    {
        // echo "Login";

        // Exibindo a view de login.
        return view('login');
    }

    /**
     * Método para submissão de login.
     */
    public function loginSubmit(Request $request)
    {
        // echo "Login Submit";
        // dd($request);
        // dd($request->all());
        // echo $request->input('text_username'); // Exibindo o valor do campo text_username com input().
        // echo "<br>";
        // echo $request->text_password; // Exibindo o valor do campo text_password com a propriedade do objeto.

        // Validando os campos do formulário com validate() aplicado ao request.
        $request->validate(
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            [
                'text_username.required' => 'O usuário é obrigatório',
                'text_username.email' => 'O usuário deve ser um e-mail válido',
                'text_password.required' => 'A senha é obrigatória',
                'text_password.min' => 'A senha deve ter no mínimo :min caracteres',
                'text_password.max' => 'A senha pode ter no máximo :max caracteres',
            ]
        );

        // Pega as informações do usuário.
        $username = $request->text_username;
        $password = $request->text_password;

        // Testa a conexão com o banco de dados.
        try {
            DB::connection()->getPdo();
            echo "A conexão com o banco de dados foi realizada com sucesso!";
        } catch(\PDOException $error) {
            echo "Falha na conexão com o banco de dados. " . $error->getMessage();
        }
    }

    /**
     * Método para logout de acesso.
     */
    public function logout()
    {
        echo "Logout";
    }
}
