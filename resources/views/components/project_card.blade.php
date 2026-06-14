<div class="card">
    @if($project->image)
        @if($project->demo_url)
            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="project-thumb">
            </a>
        @elseif($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" rel="noopener">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="project-thumb">
            </a>
        @else
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="project-thumb">
        @endif
    @endif

    <h4>{{ $project->title }}</h4>

    @if(!empty($project->tech_stack))
        <div class="tech-pills">
            @foreach(explode(',', $project->tech_stack) as $tech)
                <span class="tech-pill">{{ trim($tech) }}</span>
            @endforeach
        </div>
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
