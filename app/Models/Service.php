<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'service_title',
        'service_alias',
        'service_title_description',
        'service_description',
        'service_many_description',
    ];

    /**
     * @return BelongsToMany
     */
    public function doctor() : BelongsToMany
    {
        return $this->belongsToMany(Doctor::class);
    }
}
