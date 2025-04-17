<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = ['name', 'franchise_id'];

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
