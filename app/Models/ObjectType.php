<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function objects()
    {
        return $this->hasMany(ObjectModel::class);
    }
}


