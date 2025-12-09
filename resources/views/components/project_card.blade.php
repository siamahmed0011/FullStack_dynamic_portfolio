<div class="card">
    <h4>{{ $project->title }}</h4>

    @if(!empty($project->tech_stack))
        <p class="pill-row">{{ $project->tech_stack }}</p>
    @endif

    @if(!empty($project->description))
        <p class="muted">
            {{ \Illuminate\Support\Str::limit($project->description, 110) }}
        </p>
    @endif

    <div class="card-links">
        @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="link-sm">GitHub</a>
        @endif
        @if($project->demo_url)
            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener" class="link-sm">Live Demo</a>
        @endif
    </div>
</div>
