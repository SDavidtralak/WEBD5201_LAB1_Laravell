<?php

namespace App\Repositories;

use App\Models\Post;


class Posts
{

    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all()
    {
        return Post::all();
    }

    public function find()
    {


    }


}
