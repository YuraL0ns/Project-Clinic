<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'cat_title',
        'cat_alias',
    ];


    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class, 'category_id');
    }
}
