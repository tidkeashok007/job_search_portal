<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Job;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class employeedashboardController extends Controller
{
    public function employeedashboard()
    {
        $job = Job::where('status', 1)
        ->get();
        return view('employee.employeedashboard', compact('job'));
    }

    public function apply_Job(Request $request)
    {
        $jobseeker = new JobSeeker();
        $jobseeker->name = $request->input('name');
        $jobseeker->lastname = $request->input('lastname');
        $jobseeker->phone = $request->input('phone');
        $jobseeker->email = $request->input('email');
        $jobseeker->coverLatter = $request->input('coverLatter');
        $jobseeker->resume = $request->input('resume');
        if ($request->hasFile('resume')) 
        {
            $res = $request->file('resume');
            $name = $res->getClientOriginalName(); // Get the file extension
            $filename = 'uploads/'.$name; // Generate a unique file name
            $res->move('uploads/', $filename); // Move the file to the public/uploads directory
            // Save the file name and path to the databa
            $jobseeker->resume = $filename;
        }
        $jobseeker->save();
        return redirect()->back()->with('success', 'Job apply successfully');
    }


    public function employee_contact()
    {
        return view('employee.employee_contact');
    }

    public function employee_about()
    {
        return view('employee.employee_about');
    }

    public function employee_profile()
    {
        return view('employee.employee_profile');
    }
}
