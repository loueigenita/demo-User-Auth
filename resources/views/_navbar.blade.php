<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">X-Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('posts/recent-posts')}}">Recent Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('posts/my-posts')}}">My Posts</a>
                </li>
                @if(auth()->guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
