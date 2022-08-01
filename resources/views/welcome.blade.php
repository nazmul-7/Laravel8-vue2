<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 8 Template</title>


    <!-- Bootstrpap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Iview css -->
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/view-design/dist/styles/iview.css">
    <!-- Common css -->


    </head>
    <body class="antialiased">
        <script>
            (function () {
                window.Laravel = {
                    csrfToken: '{{ csrf_token() }}'
                };
                var authUser = {!! Auth::user() !!}
                @if(Auth::check())
                  window.authUser={!! Auth::user() !!}
                 @else
                    window.authUser=false
                 @endif
            })();
          </script>
        <div id="app">
            <default></default>
         </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
