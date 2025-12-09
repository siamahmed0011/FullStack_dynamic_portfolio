@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="section">
    <div class="container contact-wrapper">

        <div class="contact-card">
            <h2 class="page-title contact-title">Contact Information</h2>

            <p class="contact-row">
                <span class="contact-label">Email</span>
                <a href="mailto:ahmedsiam01608@gmail.com" class="contact-value">
                    ahmedsiam01608@gmail.com
                </a>
            </p>

            <p class="contact-row">
                <span class="contact-label">Facebook</span>
                <a href="https://www.facebook.com/siam.ahmed.863154/" target="_blank" class="fb-link">
                    🔵 Visit My Facebook Profile
                </a>
            </p>

            <p class="contact-row">
                <span class="contact-label">Location</span>
                <span class="contact-value">
                    Mirpur 2, Dhaka, Bangladesh
                </span>
            </p>

            <p class="contact-note">
                Feel free to reach out for collaboration or project discussion!
            </p>
        </div>

    </div>
</div>

@endsection
