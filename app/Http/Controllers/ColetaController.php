<?php

namespace App\Http\Controllers;

use App\Models\Ponto_coleta;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    //C do crud
    public function criar(Request $request)
    {
        $Ponto_coleta = new Ponto_coleta();

        $Ponto_coleta->Nome = $request->Nome;
        $Ponto_coleta->Endereco = $request->Endereco;
        $Ponto_coleta->Regiao = $request->Regiao;

        //Grava na tabela do BD
        $Ponto_coleta->save();

        return view('dashboard');
    }

    //R do CRUD
    
    public function read(){

        $Central = Ponto_coleta::where('Regiao', '1')->get();

        $Leste = Ponto_coleta::where('Regiao', '2')->get();

        $Norte = Ponto_coleta::where('Regiao', '3')->get();

        $Oeste = Ponto_coleta::where('Regiao', '4')->get();

        $Sudeste = Ponto_coleta::where('Regiao', '5')->get();

        $Sul = Ponto_coleta::where('Regiao', '6')->get();
        

        //Carrega a view passando os dados consultados 
        $dados = [
            'Central' => $Central,
            'Leste' => $Leste,
            'Norte' => $Norte,
            'Oeste' => $Oeste,
            'Sudeste' => $Sudeste,
            'Sul' => $Sul

        ];

        return view('app', $dados);

    }

}
