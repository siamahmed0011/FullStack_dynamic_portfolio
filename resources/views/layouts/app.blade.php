<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio') | {{ setting('site_name', 'Shiam Ahmed') }}</title>

    {{-- Load CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=1.0.1">

</head>

<body>
    <div class="page-wrapper">

        {{-- Header --}}
        <header class="site-header">
            <div class="container header-inner">
                <div class="brand-name">Shiam Ahmed</div>

                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
                    <svg viewBox="0 0 24 24" width="24" height="24">
                        <path fill="currentColor" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </button>

                <nav class="nav-links">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active-link' : '' }}">Home</a>
                    <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active-link' : '' }}">About</a>
                    <a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active-link' : '' }}">Projects</a>
                    <a href="{{ url('/academic') }}" class="{{ request()->is('academic') ? 'active-link' : '' }}">Academic</a>
                    <a href="{{ url('/skills') }}" class="{{ request()->is('skills') ? 'active-link' : '' }}">Skills</a>
                    <a href="{{ url('/achievements') }}" class="{{ request()->is('achievements') ? 'active-link' : '' }}">Achievements</a>
                    <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active-link' : '' }}">Contact</a>
                </nav>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="content container">
            @yield('content')
        </main>
         
         
        <script>
        const typingEl = document.getElementById("typing");
        if (typingEl) {
            const roles = [
                "Web Developer",
                "Digital Marketer",
                "Frontend Designer",
                "Machine Learning Enthusiast"
            ];

            let i = 0;
            let j = 0;
            let current = "";
            let isDeleting = false;

            function type() {
                current = roles[i];

                if(!isDeleting){
                    typingEl.textContent = current.substring(0,j++);
                }
                else{
                    typingEl.textContent = current.substring(0,j--);
                }

                if(j === current.length + 1){
                    isDeleting = true;
                    setTimeout(type,1000);
                    return;
                }

                if(j === 0){
                    isDeleting = false;
                    i++;
                    if(i === roles.length){
                        i = 0;
                    }
                }

                setTimeout(type,80);
            }

            type();
        }

        // Mobile Menu Toggle logic
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.querySelector('.nav-links');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
            
            // Close menu when clicking a link
            navLinks.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                });
            });
        }
        </script>


        {{-- Footer --}}
        <footer class="site-footer">
            <div class="footer-inner">
                © {{ date('Y') }} Shiam. All rights reserved.
            </div>
        </footer>

    </div>
</body>

</html>
