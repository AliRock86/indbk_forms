<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branche extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function brancheSecion()
    {
        return $this->hasMany(BrancheSecion::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

}
