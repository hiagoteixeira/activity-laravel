<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function insert($params = [])
    {
        $data = collect($params);
        $user_data = $data->only(['name', 'userName', 'email', 'zipCode'])->toArray();
        $user_data['password'] = bcrypt($data['password']);
        $user = User::create($user_data);

        return $user;
    }

    public function findAll()
    {
        $users = User::get();
        return $users;
    }

    public function update(User $user, $body = [])
    {
        $data = collect($body);
        $user_data = $data->only(['name', 'userName', 'email', 'zipCode', 'status'])->toArray();
        $user->update($user_data);
        return $user;
    }

    public function findOne($id)
    {

        return User::where('id', $id)->first();
    }

    public function delete(User $user)
    {
        $user->delete();
        return "User deleted!";
    }
}