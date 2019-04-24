<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'crm',
        'age',
        'gender',
        'email',
        'phone_number',
        'mobile_phone',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

}