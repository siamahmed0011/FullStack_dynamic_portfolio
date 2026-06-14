@extends('layouts.app')

@section('title', 'Skills')

@section('content')

<section class="section">
    <div class="container">
        <h2 class="section-title">My Skills</h2>

        <div class="skills-grid">
            @forelse($skills as $skill)
                <div class="skill-card">
                    <h4>{{ $skill->name }}</h4>
                    @if(!empty($skill->description))
                        <div class="tech-pills">
                            @foreach(explode(',', $skill->description) as $item)
                                <span class="tech-pill">{{ trim($item) }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @empty
                <p class="muted">No skills added yet.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection