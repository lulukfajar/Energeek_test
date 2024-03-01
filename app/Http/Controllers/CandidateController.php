<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Job;

class CandidateController extends Controller
{
    public function index()
    {
        $data['skills'] = Skill::all();
        $data['jobs'] = Job::all();
        return view('register')->with('data', $data);
    }
}
