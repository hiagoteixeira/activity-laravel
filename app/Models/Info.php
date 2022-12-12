<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';
    protected $primaryKey = "id";

    protected $fillable = [
        'cpf',
        'genero',
        'ano_nascimento'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cpf', 'cpf');
    }
}