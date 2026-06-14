@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="section">
<div class="container about-grid">

<div>

<h2 class="section-title">About</h2>

<p class="muted mb-1">
{{ setting('about_intro', 'Flutter Developer with hands-on experience building cross-platform mobile apps using Flutter and Firebase. Skilled in UI design, real-time databases, role-based systems, HTML, CSS, and JavaScript. Also proficient in Canva graphic design, AI video creation, and digital marketing. Seeking an entry-level Flutter Developer or Digital Marketing role to deliver impactful results') }}
</p>

<div class="about-card">
<h2>Profile</h2>

<p><strong>University:</strong> {{ setting('university') }}</p>

<p><strong>Department:</strong> {{ setting('department') }}</p>

<p><strong>Interests:</strong> {{ setting('interests') }}</p>

</div>

<div class="about-card">
    <h2>Education</h2>

    <div class="education-wrapper">
        @if($latestAcademic)
        <div class="edu-card">
            <div class="edu-title">{{ $latestAcademic->degree }}</div>
            <p class="edu-item">{{ $latestAcademic->institution }}</p>
            <p class="edu-muted"><strong>Year:</strong> {{ $latestAcademic->year }}</p>
            <p class="edu-muted"><strong>Result:</strong> {{ $latestAcademic->result }}</p>
        </div>
        @endif
    </div>
</div>

</div>

<div>

<div class="about-card">
<h2>Skills & Expertise</h2>

<div style="display: grid; gap: 1rem; margin-top: 1.2rem;">
@foreach($skills as $skill)
    <div>
        <h4 style="margin-bottom: 0.5rem; font-size: 0.95rem; color: #1e3a8a;">{{ $skill->name }}</h4>
        @if(!empty($skill->description))
            <div class="tech-pills" style="margin-top: 0.25rem;">
                @foreach(explode(',', $skill->description) as $item)
                    <span class="tech-pill" style="margin-bottom: 0.3rem;">{{ trim($item) }}</span>
                @endforeach
            </div>
        @endif
    </div>
@endforeach
</div>

</div>

<div class="about-card">
<h2>Contact Details</h2>

<p><strong>Email:</strong> {{ setting('contact_email') }}</p>
<p><strong>Location:</strong> {{ setting('location') }}</p>

</div>

</div>

</div>
</section>

@endsection