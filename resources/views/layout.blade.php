<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>


    </head>
    <body>
      <div class="site">

        <header>
          @include('header')
        </header>

        <main>
          @yield('content')
        </main>

        <footer>
          @include('footer')
        </footer>
      </div>
    </body>
</html>
