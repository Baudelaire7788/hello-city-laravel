<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            @yield('title', config('app.name'))
        </title>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{date('Y')}} 

                @if(!Route::is('about'))
                &middot; <a href="{{ route('about') }}"><span class="text-blue-500 underline">À propos</span></a>
                @endif
            </p>
        </footer>
    </body>
</html>