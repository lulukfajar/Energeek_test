<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\SkillSet;
use App\Models\Job;
use App\Models\Candidate;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function index()
    {
        $data['skills'] = Skill::all();
        $data['jobs'] = Job::all();
        return view('register')->with('data', $data);
    }

    public function apply(Request $request)
    {
            $validator =Validator::make($request->all(),[
                'fullname' => 'required|string|max:255',
                'jabatan' => 'required|exists:jobs,id',
                'telepon' => 'required|string|max:20',
                'email' => 'required|string|email|max:255',
                'tahun_lahir' => 'required|integer|min:1900|max:' . date('Y'),
                'skill' => 'required|array',
                'skill.*' => 'exists:skills,id',
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first()], 422);
            }

        $application = new Candidate();
        $application->name   = $request->fullname;
        $application->job_id = $request->jabatan;
        $application->phone  = $request->telepon;
        $application->email  = $request->email;
        $application->year   = $request->tahun_lahir;
        $application->created_at = now();
        $application->save();

        $candidateId = $application->id;
        $application->created_by = $candidateId;
        $application->save();

        foreach($request->skill as $skillId){
            $skillSet = new SkillSet;
            $skillSet->candidate_id = $candidateId;
            $skillSet->skill_id = $skillId;
            $skillSet->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => '', 
        ]);

    }
}
