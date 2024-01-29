<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razdel extends Model
{
    use HasFactory;

    protected $fillable = ['razdel_title', 'razdel_alias'];
    protected $table = 'razdels';
    protected $hidden = ['created_at', 'updated_at'];

    public $timestamps = false;
}
