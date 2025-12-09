<div class="timeline-item">
    <div class="timeline-dot"></div>
    <div class="timeline-body">
        <h4>{{ $academic->degree }}</h4>
        <p class="muted">
            {{ $academic->institution }}
            @if($academic->location)
                &middot; {{ $academic->location }}
            @endif
        </p>
        <p class="muted small">
            {{ $academic->start_year }} – {{ $academic->end_year ?? 'Present' }}
            @if($academic->result)
                &middot; Result: {{ $academic->result }}
            @endif
        </p>
        @if($academic->description)
            <p class="muted">{{ $academic->description }}</p>
        @endif
    </div>
</div>
