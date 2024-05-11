<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class employerdashboardController extends Controller
{
    public function employerdashboard()
    {
        return view('employer.employerdashboard');
    }

    public function jobPost(Request $request)
    {
        $job = new Job();
        $job->id = auth()->user()->id;
        $job->jobname = $request->jobname;
        $job->discription = $request->discription;
        $job->experience = $request->experience;
        $job->workingtype = $request->workingtype;
        $job->companyname = $request->companyname;
        $job->location = $request->location;
        $job->save();

        return redirect()->back();
    }


    public function employee_applied()
    {
        // $job = Job::where('id', auth()->user()->id)->where('status', 1)->pluck('id');
        // $jobseeker = JobSeeker::whereIn('jobid', $job)->get();
        // return view('employer.employee_applied', compact('jobseeker'));
        $jobseeker = JobSeeker::all();
        return view('employer.employee_applied',['jobseeker' => $jobseeker]);
    }

    public function employer_contact()
    {
        return view('employer.employer_contact');
    }
    
    public function employer_about()
    {
        return view('employer.employer_about');
    }

    public function employer_profile()
    {
        return view('employer.employer_profile');
    }


}
