<div class="card">
    <h4>{{ $achievement->title }}</h4>
    @if($achievement->issuer || $achievement->date)
        <p class="muted small">
            @if($achievement->issuer)
                {{ $achievement->issuer }}
            @endif
            @if($achievement->date)
                &middot; {{ \Carbon\Carbon::parse($achievement->date)->format('M Y') }}
            @endif
        </p>
    @endif
    @if($achievement->description)
        <p class="muted">{{ $achievement->description }}</p>
    @endif
    @if($achievement->certificate_url)
        <div class="card-links">
            <a href="{{ $achievement->certificate_url }}" target="_blank" rel="noopener" class="link-sm">View Certificate</a>
        </div>
    @endif
</div>
