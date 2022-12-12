<?php

namespace App\Services;

use App\Models\Info;
use App\Models\Usuario;
use Carbon\Carbon;

class UsuarioService
{

    public function getResults()
    {
        $infos = Info::with('usuario')->where('info.genero', 'M')->get();

        $result = [];

        foreach ($infos as $info) {
            $anoAtual = Carbon::now();
            $nascimento = Carbon::createFromFormat('Y', $info->ano_nascimento);

            $maior = $anoAtual->diffInYears($nascimento) > 50 ? "Sim" : "Nao";
            $obj = ["Usuario" => $info->usuario->nome, 'maior_50_anos' => $maior];
            array_push($result, $obj);
        }

        return $result;
    }
}