<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-green-200">

    <div class="font-semibold text-center flex flex-col justify-center items-center h-screen gap-6">
        <img src="{{asset("large.png")}}" width="200px" alt="" srcset="">
        <p class="text-3xl">Welcome To BanglaFake LLM</p>
        <p class="text-xl text-gray-700">BanFake LLM is a chatbot that helps you identify potentially fake news in
            Bangla.<br>Simply
            paste any Bangla news text, and LLM will analyze it for authenticity</p>

        <div class="">
            @if (Route::has('login'))
                <nav class="">
                    @auth
                    <button class="btn btn-success"><a href="{{ url('/dashboard') }}" >
                            Dashboard
                        </a></button>

                    @else

                        <a href="{{ route('login') }}" >
                             <button class="btn btn-success text-green-700"> Log in </button>
                        </a>


                        @if (Route::has('register'))
                            <button class="btn btn-primary"> <a href="{{ route('register') }}" >Register</a></button>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

    </div>

</body>

</html>
