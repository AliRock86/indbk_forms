<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrancheSecion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function branche()
    {
        return $this->belongsTo(Branche::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

}
