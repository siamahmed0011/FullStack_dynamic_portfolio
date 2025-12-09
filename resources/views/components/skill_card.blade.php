<div class="skill-card">
    <div class="skill-header">
        <span class="skill-name">{{ $skill->name }}</span>
        @if($skill->category)
            <span class="skill-category">{{ $skill->category }}</span>
        @endif
    </div>
</div>
