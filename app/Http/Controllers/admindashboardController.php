<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job;
use Illuminate\Http\Request;

class admindashboardController extends Controller
{
    public function admindashboard()
    {
        return view('admin.admindashboard');
    }

    public function admin_application()
    {
        $job = Job::where('status', 1)
        ->get();

        return view('admin.admin_application', compact('job'));
    }

    public function admin_employer_dtl()
    {
        $employers = User::where('role', 'employer')
        ->where('status', 1)
        ->get();

        return view('admin.admin_employer_dtl', compact('employers'));
    }


    public function admin_employee_dtl()
    {
        $employee = User::where('role', 'employee')
        ->where('status', 1)
        ->get();
        return view('admin.admin_employee_dtl', compact('employee'));
    }
    


    public function admin_employer_req()
    {
        $employers = User::where('role', 'employer')
        ->where('status', 0)
        ->get();

        return view('admin.admin_employer_req', compact('employers'));
    }

    public function admin_jobPost_req()
    {
        $job = Job::where('status', 0)
        ->get();

        return view('admin.admin_jobPost_req', compact('job'));
    }

    public function job_Post_Approve(Request $request)
    {
        $job = Job::find(
            $request->job_id
        );
        $job->status = 1;
        $job->save();

        return redirect()->back();
    }




    public function employee_Approve(Request $request)
    {
        $employer = User::find(
            $request->employer_id
        );
        $employer->status = 1;
        $employer->save();

        return redirect()->back();
    }

    public function admin_contact()
    {
        return view('admin.admin_contact');
    }
    
    public function admin_about()
    {
        return view('admin.admin_about');
    }

    public function admin_profile()
    {
        return view('admin.admin_profile');
    }
}
