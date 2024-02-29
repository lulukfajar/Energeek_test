<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSet extends Model
{
    use HasFactory;
    protected $table = 'skill_sets';
    protected $primaryKey = null;

    protected $primaryKey = ['candidate_id', 'skill_id'];
    protected $fillable = [
        'candidate_id',
        'skill_id',
    ];
    public $incrementing = false;
    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id');
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
