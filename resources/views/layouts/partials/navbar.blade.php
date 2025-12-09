<nav class="navbar">
    <div class="container nav-inner">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-link' : '' }}">Home</a>
        <a href="{{ route('academic') }}" class="{{ request()->routeIs('academic') ? 'active-link' : '' }}">Academic</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active-link' : '' }}">Projects</a>
        <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active-link' : '' }}">Skills</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active-link' : '' }}">About</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active-link' : '' }}">Contact</a>
    </div>
</nav>
