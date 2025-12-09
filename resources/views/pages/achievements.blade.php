@extends('layouts.app')

@section('title', 'Achievements')

@section('content')
    <section class="section">
        <div class="container">
            <h2>Achievements</h2>
            <p class="muted mb-1">
                Competitions, awards and recognitions I’m proud of.
            </p>

            <div class="card-grid">
                @forelse($achievements as $achievement)
                    @include('components.achievement_card', ['achievement' => $achievement])
                @empty
                    <p class="muted">No achievements added yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
