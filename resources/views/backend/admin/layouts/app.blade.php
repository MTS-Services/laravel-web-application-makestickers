<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    {{-- All CSS Files Are Loaded Here --}}
    @include('backend.admin.layouts.src.css')
</head>

<body>

    {{-- Header --}}
    @include('backend.admin.layouts.partials.header')

    {{-- Sidebar --}}
    @include('backend.admin.layouts.partials.sidebar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('backend.admin.layouts.partials.footer')

    {{-- All JS Files Are Loaded Here --}}
    @include('backend.admin.layouts.src.js')
</body>

</html>
