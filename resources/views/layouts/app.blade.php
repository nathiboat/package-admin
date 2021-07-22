<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-gray-50 p-6">
        <div class="flex items-center flex-shrink-0 text-black mr-6">
            <a href="/home" class="font-semibold text-xl tracking-tight">Dashboard</a>
        </div>
        <div class="block lg:hidden">
         
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
            <a href="/users" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-green-500 mr-4">
              Create User
            </a>
            <a href="/packages" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-green-500 mr-4">
              Create Package
            </a>
          </div>
          <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-red border-red-500 hover:border-transparent hover:text-green-500 hover:bg-red mt-4 lg:mt-0">
              Logout
            </a>
          </div>
        </div>
      </nav>
    <div id="app">
        <main class="container mx-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>