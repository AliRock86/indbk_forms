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


    public function statusType(): BelongsTo
    {
        return $this->belongsTo(StatusType::class);
    }

    public function document() : HasOne
    {
        return $this->hasOne(Document::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
