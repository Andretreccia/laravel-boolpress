<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    //
    protected $fillable = ['title', 'image', 'sub_title', 'content', 'slug', 'category_id', 'tags'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /* public function tags():"Belongs"
    {
        return $this->belongsToMany(Tag::class);
    } */

    /**
     * The tags that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}