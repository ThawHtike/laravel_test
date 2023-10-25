<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

  

class Comment extends Model

{

    use HasFactory;

  

    /**

     * Get the post that owns the comment.

     *  

     * Syntax: return $this->belongsTo(Post::class, 'foreign_key', 'owner_key');

     *

     * Example: return $this->belongsTo(Post::class, 'post_id', 'id');

     * 

     */

    public function post(): BelongsTo

    {

        return $this->belongsTo(Post::class);

    }

}