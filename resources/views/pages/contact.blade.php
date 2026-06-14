@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="section">
    <div class="container">
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                Please correct the errors in the form below.
            </div>
        @endif

        <div class="contact-grid">
            {{-- Contact Information --}}
            <div class="contact-card" style="margin: 0;">
                <h2 class="page-title contact-title">Contact Information</h2>

                <p class="contact-row">
                    <span class="contact-label">Email</span>
                    <a href="mailto:{{ setting('contact_email') }}" class="contact-value">
                        {{ setting('contact_email') }}
                    </a>
                </p>

                <p class="contact-row">
                    <span class="contact-label">LinkedIn</span>
                    <a href="{{ setting('linkedin_url') }}" target="_blank" class="contact-value linkedin-link">
                        Visit My LinkedIn Profile
                    </a>
                </p>

                <p class="contact-row">
                    <span class="contact-label">GitHub</span>
                    <a href="{{ setting('github_url') }}" target="_blank" class="contact-value">
                        View My GitHub
                    </a>
                </p>

                <p class="contact-row">
                    <span class="contact-label">Location</span>
                    <span class="contact-value">
                        {{ setting('location') }}
                    </span>
                </p>

                <p class="contact-note">
                    Feel free to contact me for collaboration, internship, or job opportunities.
                </p>
            </div>

            {{-- Message Form --}}
            <div class="contact-card" style="margin: 0;">
                <h2 class="page-title contact-title">Send a Message</h2>
                
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Your Name" required>
                        @error('name')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="your.email@example.com" required>
                        @error('email')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" placeholder="Message Subject">
                        @error('subject')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="How can I help you?" required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem; width: 100%;">Send Message</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection