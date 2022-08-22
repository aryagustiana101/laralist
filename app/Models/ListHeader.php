<?php

namespace App\Models;

use App\Models\User;
use App\Models\ListBody;
use App\Models\ListType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListHeader extends Model
{
    use HasFactory;

    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(ListType::class, "list_type_id");
    }

    public function body()
    {
        return $this->hasMany(ListBody::class);
    }
}
