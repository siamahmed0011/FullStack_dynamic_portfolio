@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="section">
<div class="container about-grid">

<div>

<h2 class="section-title">About</h2>

<p class="muted mb-1">
{{ setting('about_intro') }}
</p>

<div class="about-card">
<h2>Profile</h2>

<p><strong>University:</strong> {{ setting('university') }}</p>

<p><strong>Department:</strong> {{ setting('department') }}</p>

<p><strong>Interests:</strong> {{ setting('interests') }}</p>

</div>

<div class="about-card">
<h2>Education</h2>

@foreach($academics as $academic)

<p><strong>{{ $academic->degree }}</strong>: {{ $academic->institution }}</p>
<p><strong>Year:</strong> {{ $academic->year }}</p>
<p><strong>Result:</strong> {{ $academic->result }}</p>
<br>

@endforeach

</div>

</div>

<div>

<div class="about-card">
<h2>Skills</h2>

<ul class="bullet-list">
@foreach($skills as $skill)
<li>{{ $skill->name }}</li>
@endforeach
</ul>

</div>

<div class="about-card">
<h2>Programming Languages</h2>

<ul class="bullet-list">
<li>C</li>
<li>Python</li>
<li>HTML</li>
<li>PHP</li>
</ul>

</div>

<div class="about-card">
<h2>Contact</h2>

<p><strong>Email:</strong> {{ setting('contact_email') }}</p>
<p><strong>Location:</strong> {{ setting('location') }}</p>

</div>

</div>

</div>
</section>

@endsection