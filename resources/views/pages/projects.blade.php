@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section class="section">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <p class="muted mb-1">
                Some of the projects that showcase my skills and interests.
            </p>

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
