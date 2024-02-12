<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vite Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    {{-- @include('partials.main') --}}
    <main>
        <div class="main">
            <div class="container ">
                <div class="row">
                    <div class="mid text-center">
                        <div class="col-2 text-center ">
                            <h4 class="btn-blue">CURRENT COMIC</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="cont-main">
                        @foreach ($comics as $comic)
                            <div class="col-2 p-4">
                                <img src="{{ $comic['thumb'] }}" alt="">
                                <p class="text-white">{{ $comic['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=" d-flex bottone text-center">
                <h4 class="btn-blue">LOAD MORE</h4>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
