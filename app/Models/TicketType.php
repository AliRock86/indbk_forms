<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketType extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function specificToBranch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function ticketRole()
    {
        return $this->hasMany(TicketRole::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

}
