<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'name',
    	'description',
    ];

    protected $hidden = [
        'pivot'
    ];
    public function doctors()
    {
    	return $this->belongsToMany(Doctor::class);
    }
}
