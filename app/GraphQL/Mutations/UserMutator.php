<?php


namespace App\GraphQL\Mutations;


use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserMutator
{
    public function create($root, array $args)
    {
        $token = Str::random(60);
        $user = User::factory()->make(Arr::only($args,['email','name','password']));
        $user->api_token = $token;
        $user->save();

        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
