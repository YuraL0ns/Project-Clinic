<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'post_alias',
        'description',
        'category_id'
    ];
    
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function categories() : HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
