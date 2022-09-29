<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {

        $this->comments()->create(compact('body'));

        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $this->id
        // ]);

    }

}
