<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Padaria extends Controller
{
    public function index()
    {
        $padaria = CRUD::all();

        //          nome da view       atributo q contém a resp da consulta
        return view('CRUD',compact('padaria'));
    }


public function store(Request $request)
    {    
        $produto = new CRUD();

        $produto->nomeProduto = $request->txNomeProduto;
        $produto->descricao = $request->txDescricao; //Ingredientes e/ou quantidade(ml)
        $produto->preco = $request->txPreco;
        $produto->qntProduto = $request->txQuantProdu; //Quantidade em estoque
        $produto->img = $request->txImg;

        $produto->save();

        return redirect('/CRUD');
    }
}