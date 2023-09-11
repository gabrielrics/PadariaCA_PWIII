<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $table = 'tbProduto';

    protected $fillable = ['idProduto','nomeProduto','descricao','preco','qtdProduto','img'];

    public $timestamps = false;

}
