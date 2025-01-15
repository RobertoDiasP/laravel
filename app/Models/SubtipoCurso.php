<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubtipoCurso extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipo_curso_id'];

    public function tipoCurso()
    {
        return $this->belongsTo(TipoCurso::class);
    }
}
