<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = array('nome_prodotto','slang', 'tipologia', 'descrizione', 'prodotto');
    public $timestamps = false;
}
