<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permtion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ticketRole()
    {
        return $this->hasMany(TicketRole::class);
    }

}
