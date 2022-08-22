<?php

namespace App\Models;

use App\Models\ListHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListBody extends Model
{
    use HasFactory;

    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
    ];

    public function header()
    {
        return $this->belongsTo(ListHeader::class);
    }
}
