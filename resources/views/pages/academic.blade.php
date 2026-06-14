@extends('layouts.app')

@section('title', 'Academic')

@section('content')
    <section class="section">
        <div class="container" style="max-width: 800px;">
            <h2 class="section-title">Academic Journey</h2>
            <p class="muted mb-1">
                My educational background and qualifications.
            </p>

            <div class="timeline">
                @forelse($academics as $academic)
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-body">
                            <h4 style="font-size: 1.15rem; font-weight: 600; color: #111827; margin-bottom: 0.3rem;">{{ $academic->degree }}</h4>
                            <p style="font-weight: 500; color: #4b5563; margin-bottom: 0.25rem;">{{ $academic->institution }}</p>
                            @if(!empty($academic->result))
                                <p style="font-size: 0.88rem; color: #6b7280; margin-bottom: 0.5rem;">Result: <strong style="color: #111827;">{{ $academic->result }}</strong></p>
                            @endif
                            <span class="tech-pill" style="display: inline-block;">Year: {{ $academic->year ?? 'N/A' }}</span>
                        </div>
                    </div>
                @empty
                    <p class="muted">No academic history added yet.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection