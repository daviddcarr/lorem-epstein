<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height bg-dark">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7">
                        <h1 class="title m-b-md text-light">
                            Lorem Epstein
                        </h1>
                        <button class="btn btn-primary mb-3" id="bold-toggler">What Happened to Epstein?</button>
                        <div class="paragraphs text-light">
                         {!! $paragraphs !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
