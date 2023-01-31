<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vertical Navbar - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }} "/>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
      
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/logo/favicon.svg') }}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/logo/favicon.png') }}"
      type="image/png"
    />
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"> --}}
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
  </head>

  <body>
    <div id="app">
        @include('layouts.partials.__sidebar')
      {{-- sidebar --}}
      <div id="main" class="layout-navbar navbar-fixed">
        <header class="mb-3">
        {{-- navbar --}}
         @include('layouts.partials.__navbar')
        </header>
        <div id="main-content">
            {{-- content --}}
            {{-- @yield('content') --}}
          {{$slot}}
          {{-- footer --}}
          @include('layouts.partials.__footer')
     
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
    @livewireScripts
  </body>
</html>
