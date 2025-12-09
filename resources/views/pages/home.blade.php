@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero section: image + intro --}}
    <section class="hero">
        <div class="container hero-grid">
            {{-- Left: text --}}
            <div class="hero-text">
                <p class="eyebrow">Hi, I’m</p>
                <h1>Shiam Ahmed</h1>
                <p class="hero-subtitle">
                    Final-year CSE student skilled in digital marketing, YouTube SEO, and modern web development.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('projects') }}" class="btn btn-primary">View My Projects</a>
                    <a href="{{ route('about') }}" class="btn btn-outline">About Me</a>
                </div>
            </div>

            {{-- Right: profile image --}}
            <div class="hero-avatar-wrap">
                <div class="hero-avatar">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo">
                </div>

            </div>
        </div>
    </section>

    {{-- Featured Projects section --}}
    <section class="section">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>

            <div class="card-grid">
                @forelse($projects as $project)
                    @include('components.project_card', ['project' => $project])
                @empty
                    <p class="muted">No projects added yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
