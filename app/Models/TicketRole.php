<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketRole extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function permtion()
    {
        return $this->belongsTo(Permtion::class);
    }
    public function ticketType()
    {
        return $this->belongsTo(TicketType::class);
    }

}
