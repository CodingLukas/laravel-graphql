<?php


namespace App\GraphQL\Queries;


class UserQuery
{
    public function paginate($root, array $args)
    {
        return \App\Models\User::query()->paginate(
            $args['count'],
            ['*'],
            'page',
            $args['page']
        );
    }
}
