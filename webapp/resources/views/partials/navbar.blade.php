<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(44, 116, 179) !important;">
    <div class="container">
        <!-- Logo on the left -->
        <a class="navbar-brand" href="/home">
            <img src="{{ asset('image/logo.png') }}" alt="navbar" style="width: 100px; height: auto" />
        </a>
        <!-- Toggler button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar menu on the right -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/" style="color: {{ ($title === "Home") ? 'white' : 'rgb(163, 162, 162)' }}">Home</a>
                <a class="nav-link {{ ($title === "Report Lost Item") ? 'active' : '' }}" href="/report-lost" style="color: {{ ($title === "Report Lost Item") ? 'white' : 'rgb(163, 162, 162)' }}">Report Lost Item</a>
                <a class="nav-link {{ ($title === "Report Found Item") ? 'active' : '' }}" href="/report-found" style="color: {{ ($title === "Report Found Item") ? 'white' : 'rgb(163, 162, 162)' }}">Report Found Item</a>
                <a class="nav-link {{ ($title === "Recent Post") ? 'active' : '' }}" href="/recent-post" style="color: {{ ($title === "Recent Post") ? 'white' : 'rgb(163, 162, 162)' }}">Recent Post</a>
            </div>
        </div>
        @if(auth()->check())
            <!-- User is authenticated, show logout link -->
            <form action="{{ route('logout') }}" method="post" class="nav-link" style="display: inline; color: white;">
                @csrf
                <button type="submit" style="border: none; background: none; padding: 0; margin: 0; font-size: 16px; cursor: pointer;">
                    <span class="material-symbols-outlined" style="vertical-align: middle; font-size: 24px; line-height: 1.75rem; margin-left: 0.5rem; color:hsl(240,6.38%,63.14%)"> exit_to_app </span>
                </button>
            </form>
            @else
                <!-- User is not authenticated, show login link -->
                <a class="{{ ($title === "Login") ? 'active' : '' }}" href="/login" id="user" style="color: {{ ($title === "Login") ? 'white' : 'rgb(163, 162, 162)' }}">
                    <span class="material-symbols-outlined" style="vertical-align: middle; font-size: 24px; line-height: 1.75rem; margin-left: 0.5rem "> account_circle </span>
                </a>
        @endif

    </div>
</nav>
