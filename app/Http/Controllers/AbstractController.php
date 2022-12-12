<?php

namespace App\Http\Controllers;

use App\Services\AbstractService;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    //
    protected $abstract_service;

    public function __construct(AbstractService $abstract_service)
    {
        $this->abstract_service = $abstract_service;
    }

    public function arrayHandler()
    {
        return $this->abstract_service->arrayHandler();
    }
}