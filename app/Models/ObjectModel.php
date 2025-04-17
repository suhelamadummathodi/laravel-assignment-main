<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectModel extends Model
{
    use HasFactory;

    protected $table = 'objects';
    protected $fillable = ['name', 'object_type_id'];

    public function objectType()
    {
        return $this->belongsTo(ObjectType::class);
    }
}
