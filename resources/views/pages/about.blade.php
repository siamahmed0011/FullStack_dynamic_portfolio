@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="section">
        <div class="container about-grid">
            <div>
                <h2 class="section-title">About</h2>
                <p class="muted mb-1">
                    I’m a final-year CSE student with a growing passion for modern web development and digital innovation. 
                    Alongside my technical journey, I also specialize in digital marketing, YouTube SEO, and online brand growth.
                </p>

                <div class="about-card">
                    <h2>Profile</h2>
                    <p><strong>University:</strong> Daffodil International University</p>
                    <p><strong>Department:</strong> CSE</p>
                    <p><strong>Interests:</strong> Web development, Machine learning, Social marketing</p>
                </div>

                <div class="about-card">
                    <h2>Education</h2>
                    <p><strong>School:</strong> St.Joseph's School & College</p>
                    <p><strong>SSC passing Year:</strong>2018</p>
                    <p><strong>Result:</strong>GPA:5.00</p> <br>
                    <p><strong>College:</strong> Shahzadpur Govt.college</p>
                    <p><strong>HSC passing Year:</strong>2020</p>
                    <p><strong>Result:</strong>GPA:5.00</p>
 
                </div>

                <div class="about-card">
                    <h2>Contact</h2>
                    <p><strong>Email:</strong> ahmedsiam01608@gmail.com</p>
                    <p><strong>Location:</strong> Mirpur 2, Dhaka, Bangladesh</p>
                </div>
            </div>

            <div>
                <div class="about-card">
                    <h2>Skills</h2>
                    <ul class="bullet-list">
                        <li>HTML, CSS</li>
                        <li>Graphics Design(Canva)</li>
                        <li>Digital Marketing, Youtube SEO</li>
                        <li>Lead Generation</li>
                        <li>Basic Machine Learning</li>
                    </ul>
                </div>
                
                <div class="about-card">
                    <h2>Experience</h2>
                    <ul class="bullet-list">
                        <li>DIU JOB UTSOB 2023 & 24</li>
                        <h5>As a Guest handling, management & communication support</h5>
                        <li>Unveiling of the Book: "Life Struggle of Pathikrit Entrepreneurs"</li>
                        <h5>As a protocol Member</h5>
                        
                    </ul>
                </div>

                <div class="about-card">
                    <h2>Programming Languages</h2> 
                    <ul class="bullet-list">
                        <li>C </li>
                        <li>Python</li>
                        <li>Html, CSS</li>
                        <li>PHP</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
