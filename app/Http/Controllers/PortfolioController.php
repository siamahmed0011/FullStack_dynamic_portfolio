<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;

class PortfolioController extends Controller
{
    public function home()
    {
        $projects     = Project::latest()->take(3)->get();
        $skills       = Skill::latest()->take(6)->get();
       

        return view('pages.home', compact('projects', 'skills'));
    }

    public function academic()
{
    $academics = Academic::latest()->get();
    // or: $academics = Academic::orderByDesc('id')->get();

    return view('pages.academic', compact('academics'));
}


    public function projects()
    {
        $projects = Project::latest()->get();
        return view('pages.projects', compact('projects'));
    }

    public function skills()
    {
        $skills = Skill::latest()->get();
        return view('pages.skills', compact('skills'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
{
    return view('pages.contact');
}

}
