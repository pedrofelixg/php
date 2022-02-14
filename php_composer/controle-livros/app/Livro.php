<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function autor() {
        return $this->hasOne(Autor::class);
    }

}
