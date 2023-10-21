<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thesis extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'nim',
        'faculty_id',
        'major_id',
        'title',
        'abstract',
        'isrnissn',
        'no',
        'category',
        'date',
        'metodology',
        'collation',
        'photo',
        'file',
        'review',
        'status',
        'position',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
