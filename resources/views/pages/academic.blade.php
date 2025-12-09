@extends('layouts.app')

@section('title', 'Academic')

@section('content')
<div class="about-card">
    <h3>Education</h3>

    <div class="education-wrapper">

        <div class="edu-card">
            <div class="edu-title">University</div>
            <p class="edu-item">Daffodil International University</p>
            <p class="edu-muted">Department: CSE</p>
        </div>

        <div class="edu-card">
            <div class="edu-title">College</div>
            <p class="edu-item">Shahzadpur Govt. College</p>
            <p class="edu-muted">HSC Passing Year: 2020</p>
            <p class="edu-muted">Result: GPA 5.00</p>
        </div>

        <div class="edu-card">
            <div class="edu-title">School</div>
            <p class="edu-item">St. Joseph's School & College</p>
            <p class="edu-muted">SSC Passing Year: 2018</p>
            <p class="edu-muted">Result: GPA 5.00</p>
        </div>

    </div>
</div>
@endsection
