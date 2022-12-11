<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireStyles
</head>
<body>
      <header>
        @livewire('component.header')
      </header>

      <main>
        {{ $slot }}
      </main>

      <footer class="text-center lg:text-left bg-gray-800 text-white mt-36">
          @livewire('component.footer')
      </footer>

  @livewireScripts
</body>
</html>