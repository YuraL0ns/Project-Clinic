<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = [
        'doctor_alias',
        'first_name',
        'second_name',
        'last_name' ,
        'age' ,
        'work_stage_year',
        'work_start_year',
        'doctor_img'
    ];

    /**
     * @return BelongsToMany
     */
    public function services() : BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'doctor_service', 'service_id', 'doctor_id');
    }

}
