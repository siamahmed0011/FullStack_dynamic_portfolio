@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="section">
    <div class="container contact-wrapper">

        <div class="contact-card">
            <h2 class="page-title contact-title">Contact Information</h2>

            <p class="contact-row">
                <span class="contact-label">Email</span>
                <a href="mailto:{{ setting('contact_email') }}" class="contact-value">
                    {{ setting('contact_email') }}
                </a>
            </p>

            <p class="contact-row">
                <span class="contact-label">Facebook</span>
                <a href="{{ setting('facebook_link') }}" target="_blank" class="fb-link">
                    🔵 Visit My Facebook Profile
                </a>
            </p>

            <p class="contact-row">
                <span class="contact-label">Location</span>
                <span class="contact-value">
                    {{ setting('location') }}
                </span>
            </p>

            <p class="contact-note">
                Feel free to reach out for collaboration or project discussion!
            </p>
        </div>

    </div>
</div>

@endsection