<?php

namespace App\Models;

use App\Models\ListHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function lists()
    {
        return $this->hasMany(ListHeader::class);
    }
}
