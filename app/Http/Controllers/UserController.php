<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    protected $user_service;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }


    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'userName' => 'required|string|unique:users,userName',
            'email' => 'required|unique:users,email|string',
            'zipCode' => 'required|size:8|string',
            'password' => 'required|string|min:6',

        ]);
        $result = $this->user_service->insert($validatedData);
        return response()->json($result);
    }

    public function findAll()
    {
        $result = $this->user_service->findAll();
        return response()->json($result);
    }

    public function findOne($id)
    {
        $result = $this->user_service->findOne($id);
        return response()->json($result);
    }

    public function update(User $user, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'userName' => 'required|string|unique:users,userName',
            'email' => 'required|unique:users,email|string',
            'zipCode' => 'required|size:8|string',

        ]);
        $result = $this->user_service->update($user, $validatedData);
        return response()->json($result);
    }

    public function delete(User $user)
    {
        $result = $this->user_service->delete($user);
        return response()->json($result);
    }
}