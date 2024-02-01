<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div style = "padding-top: 15px; padding-bottom:15px; margin-left:25px;">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style = "margin-right:35px;">Return to Dashboard</a>
                    <a href="{{ url('/logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log Out</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style = "margin-right:15px;">Log into your Account</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-black-600 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register for an Account</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
  </nav>

  