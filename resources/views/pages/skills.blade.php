@extends('layouts.app')

@section('title', 'Skills')

@section('content')

<div class="section">
    <h2 class="page-title">My Skills</h2>

    <div class="skills-grid">

        @forelse($skills as $skill)

        <div class="skill-card">
            <h4>{{ $skill->name }}</h4>
            <p class="skill-desc">{{ $skill->description }}</p>
        </div>

        @empty
        <p>No skills added yet.</p>
        @endforelse

    </div>
</div>

@endsection