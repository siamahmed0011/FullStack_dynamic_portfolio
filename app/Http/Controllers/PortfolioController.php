<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;

class PortfolioController extends Controller
{
    public function home()
    {
        $projects = Project::orderByRaw("CASE WHEN title = 'Food Waste Reduce' THEN 0 ELSE 1 END")
            ->latest()
            ->take(3)
            ->get();

        $skills = Skill::latest()->take(6)->get();

        return view('pages.home', compact('projects', 'skills'));
    }

    public function academic()
    {
        $academics = Academic::latest()->get();

        return view('pages.academic', compact('academics'));
    }

    public function projects()
    {
        $projects = Project::latest()->get();

        return view('pages.projects', compact('projects'));
    }

 public function skills()
{
    $skills = Skill::orderBy('id','asc')->get();
    return view('pages.skills', compact('skills'));
}

    public function about()
{
    $skills = Skill::orderBy('id','asc')->get();   // oldest first
    $academics = Academic::orderBy('id','asc')->get();

    return view('pages.about', compact('skills','academics'));
}

    public function contact()
    {
        return view('pages.contact');
    }
}