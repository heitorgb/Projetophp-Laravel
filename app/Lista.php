<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'dt_inicio', 'dt_fim', 'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id', 'id');
    }


    public function getDtInicioAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function getDtFimAttribute($value)
    {
        return date('d/m/Y \a\s H:i', strtotime($value));
    }
}
