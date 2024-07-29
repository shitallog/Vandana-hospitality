<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
   public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->qualification = $request->qualification;
        $job->experience = $request->experience;
        $job->description = $request->description;
        $job->save();

        return redirect()->route('jobs.index');
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->title = $request->title;
        $job->qualification = $request->qualification;
        $job->experience = $request->experience;
        $job->description = $request->description;
        $job->save();

        return redirect()->route('jobs.index');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
