<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Academic;
use App\Models\Achievement;
use App\Models\Message;
use Illuminate\Http\Request;

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
        $academics = Academic::orderBy('year', 'desc')->get();

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

    public function achievements()
    {
        $achievements = Achievement::orderBy('date', 'desc')->get();
        return view('pages.achievements', compact('achievements'));
    }

    public function about()
    {
        $skills = Skill::orderBy('id','asc')->get();   // oldest first
        $academics = Academic::orderBy('id','asc')->get();
        $latestAcademic = Academic::orderBy('year', 'desc')->first();

        return view('pages.about', compact('skills', 'academics', 'latestAcademic'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}