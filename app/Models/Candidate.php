<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidates';

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'year',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function skillSets()
    {
        return $this->hasMany(SkillSet::class, 'candidate_id');
    }
}
