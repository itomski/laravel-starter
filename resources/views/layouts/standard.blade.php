<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
</head>
<body>
    {{-- Includiert ein anderes Teiltemplate: DRY --}}
    @include('navi')

    <header>
        {{-- Blade Kommentar --}}
        {{-- Bereich benennen --}}
        @yield('header') 
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>