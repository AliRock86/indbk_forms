<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
        'status_type_id',
    ];


    public function statusType()
    {
        return $this->belongsTo(StatusType::class);
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

}
