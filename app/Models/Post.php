<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $fillable = ['slug', 'title', 'excerpt', 'body'];

    protected $guarded = [];

    //the category and the author are included as part of the results set => s tem rešiš N+1 problem
    protected $with = ['category', 'author'];


    public function scopeFilter($query, array $filters)  // Post::newQuery()->filter()
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            );
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', fn($query) =>
            $query->where('slug', $category));
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            $query->whereHas('author', fn($query) =>
            $query->where('username', $author));
        });
    }


    //SECOND WAY
    /*public function getRouteKeyName()
    {
        return 'slug';
    }*/

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}