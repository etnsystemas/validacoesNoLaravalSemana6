<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    //
    public function store(CursoRequest $request)
    {
//      Validator::make(
//          $request->except('_token'),
//            [
//                "curso" => ['required', 'max:100'],
//                "carga" => ['required', 'integer']
//            ]
//        )->validate();

//        if ($validacao->fails()){
//            return redirect()->back()->withInput()->withErrors($validacao);
//        }


//        $request->validate([
//                "curso" => ['required', 'max:100'],
//                "carga" => ['required', 'integer']
//            ]);

        dd('essdfsdfsdf');
    }

    public function storeAPI(Request $request)
    {
        $dados = $request->all();
        $validacao = Validator::make(
            $dados,
            [
                "curso" => ['required', 'max:100'],
                "carga" => ['required', 'integer']
            ]
        );

        if($validacao->fails()){
            $erros = $validacao->errors();
            return $erros->all();
        }
        dd('passou na validação');
    }
}
