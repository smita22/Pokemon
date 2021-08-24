<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon</title>

        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Scripts -->
        
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
       
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="container">
            <center><h1>Pokemon data</h1></center>

            @foreach ($pokemonRenderData as $pokemonRenderData)
                <div class="card tabcard" style="width: 18rem;">
                  <img class="card-img-top" src={{$pokemonRenderData['img']}} alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{$pokemonRenderData['name']}}</h5>
                    <ul>
                        @foreach ($pokemonRenderData['type'] as $type)
                            <li>{{$type}}</li>
                        @endforeach
                    </ul>                   
                  </div>
                </div>                
            @endforeach

        </div>
    </body>
</html>
