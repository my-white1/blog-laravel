<nav class="navbar navbar-expand-md bg-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            Blog
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::is('/') ? 'active' : '' }}" aria-current="page">
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog*') ? 'active' : '' }}" aria-current="page">
                        {{ __('Blog') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ Route::is('register') ? 'active' : '' }}" aria-current="page">
                        {{ __('Register') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ Route::is('login') ? 'active' : '' }}" aria-current="page">
                        {{ __('Login') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
