<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

  

class Post extends Model

{

    use HasFactory;

 

    /**

     * Get the comments for the blog post.

     *   

     * Syntax: return $this->hasMany(Comment::class, 'foreign_key', 'local_key');

     *

     * Example: return $this->hasMany(Comment::class, 'post_id', 'id');

     * 

     */

    public function comments(): HasMany

    {

        return $this->hasMany(Comment::class);

    }

}