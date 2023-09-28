<header class="border-bottom">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container">

            <a href="{{ route('home') }}" class="navbar-brand">{{ config('app.name') }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link{{ active_link('home') }}" aria-current="page">{{ __('Home') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('posts') }}" class="nav-link{{ active_link('posts*') }}" aria-current="page">{{ __('Blog') }}</a>
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link{{ active_link('register') }}" aria-current="page">{{ __('Register') }}</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link{{ active_link('login') }}" aria-current="page">{{ __('Login') }}</a>
                    </li>

                </ul>

            </div>

        </div>
        
    </nav>

</header>