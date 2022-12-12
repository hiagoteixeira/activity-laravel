<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuario";
    protected $primaryKey = "id";
    protected $fillable = [
        "nome",
        "cpf"
    ];

    public function info()
    {
        return $this->hasOne(Info::class, 'cpf', 'cpf');
    }
}