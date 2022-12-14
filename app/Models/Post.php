<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class) ;
    }

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

    public function scopeFilter($query, $filters)
    {


        if($month = $filters['month'] ?? false)
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year'] ?? false)
        {
            $query->whereMonth('created_at', $year);
        }


    }

    public static function archives()
    {

        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month' )
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();


    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


}
