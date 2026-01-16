@props(['title' => ''])

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | {{ $title }} </title>
    <!-- let load app.css and app.js using vite directives -->
    @vite(['resources/sass/app.scss',
            'resources/js/app.js',
            'resources/js/cms.js',
            'resources/css/app.css',
            'resources/css/cms.css'
            ])

  </head>

  <body class="">
    {{ $slot }}
  </body>
</html>
