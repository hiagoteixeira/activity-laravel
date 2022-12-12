<?php

namespace App\Http\Controllers;

use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    protected $usuario_service;

    public function __construct(UsuarioService $usuario_serivce)
    {
        $this->usuario_service = $usuario_serivce;
    }

    public function getResults()
    {
        $result = $this->usuario_service->getResults();
        return response()->json($result);
    }
}