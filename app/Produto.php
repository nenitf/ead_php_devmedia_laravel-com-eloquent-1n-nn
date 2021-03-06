<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        "descricao", "preco", "cor", "peso", "marca_id"
    ];

    // Produto pertence a uma marca
    public function marca(){
        return $this->belongsTo('App\Marca', 'marca_id');
    }

    // Produto pertence e possui categorias
    public function categorias(){
        return $this->belongsToMany('App\Categoria', 'categoria_produto');
    }
}
