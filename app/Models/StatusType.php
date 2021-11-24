<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusType extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function status()
    {
        return $this->hasMany(Status::class);
    }

}
