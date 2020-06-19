<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>
    </head>
    <body>
      <div class="site">

        <header>
          @include('components.header')
        </header>

        <main>
          @yield('content')
        </main>

        <footer>
          @include('components.footer')
        </footer>
      </div>
    </body>
</html>
