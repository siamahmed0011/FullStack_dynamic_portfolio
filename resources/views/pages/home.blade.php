@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <p class="eyebrow">HI, I’M</p>

            <h1>{{ setting('site_name', 'Shiam Ahmed') }}</h1>

            <p class="hero-subtitle">
                {{ setting('hero_description', 'Flutter Developer & Digital Marketer skilled in building cross-platform mobile apps, Canva graphic design, and modern web development') }}
            </p>

            <div class="hero-actions">
                <a href="{{ url('/projects') }}" class="btn btn-primary">View My Projects</a>
                <a href="{{ url('/about') }}" class="btn btn-outline">About Me</a>
            </div>
        </div>

        <div class="hero-avatar-wrap">
            <div class="hero-avatar">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image">
            </div>
        </div>
    </div>
</section>

<section class="section featured-projects">
    <h2 class="section-title">Featured Projects</h2>

    <div class="card-grid">
        @forelse($projects as $project)
            <div class="card">
                @if($project->image)
<a href="{{ $project->github_url }}" target="_blank">
<img src="{{ asset('storage/'.$project->image) }}" class="project-thumb">
</a>
@endif

                <h4>{{ $project->title }}</h4>

                @if(!empty($project->tech_stack))
                    <div class="tech-pills">
                        @foreach(explode(',', $project->tech_stack) as $tech)
                            <span class="tech-pill">{{ trim($tech) }}</span>
                        @endforeach
                    </div>
                @endif

                <p>{{ \Illuminate\Support\Str::limit($project->description, 120) }}</p>

                <div class="card-links">
                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="link-sm">GitHub</a>
                    @endif

                    @if($project->demo_url && $project->demo_url !== '#')
                        <a href="{{ $project->demo_url }}" target="_blank" class="link-sm">Live Demo</a>
                    @endif
                </div>
            </div>
        @empty
            <p>No projects added yet.</p>
        @endforelse
    </div>
</section>

@endsection