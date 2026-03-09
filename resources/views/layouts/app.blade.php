<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>

    {{-- Load CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="page-wrapper">

        {{-- Header --}}
        <header class="site-header">
            <div class="container header-inner">
                <div class="brand-name">Shiam Ahmed</div>

                <nav class="nav-links">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active-link' : '' }}">Home</a>
                    <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active-link' : '' }}">About</a>
                    <a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active-link' : '' }}">Projects</a>
                    <a href="{{ url('/academic') }}" class="{{ request()->is('academic') ? 'active-link' : '' }}">Academic</a>
                    <a href="{{ url('/skills') }}" class="{{ request()->is('skills') ? 'active-link' : '' }}">Skills</a>
                    <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active-link' : '' }}">Contact</a>
                </nav>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="content container">
            @yield('content')
        </main>
         
         
        <script>

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
document.getElementById("typing").textContent = current.substring(0,j++);
}
else{
document.getElementById("typing").textContent = current.substring(0,j--);
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
