<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projektas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <header>
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <a href="{{ url('/search') }}">Search</a>
                        <a href="{{ url('/materials') }}">Materials</a>
                        <a href="{{ url('/requests') }}">Requests</a>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        <a href="{{ url('forgot-password') }}" class="ml-4 text-sm text-gray-700 underline">Forgot password</a>
                        {{-- <a href="{{ route('reset-password') }}" class="ml-4 text-sm text-gray-700 underline">Reset password</a> --}}
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <main>
        @auth
            @yield('main')
        @endauth

    </main>

    <footer>
        <div class="fixed-bottom text-center">
            @auth
                <div>Php20/2 2021m.</div>
            @endauth
        </div>
    </footer>

</body>

</html>
