<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'status_type_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}
