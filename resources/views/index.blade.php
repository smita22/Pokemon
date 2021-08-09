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
            <h1>Pokemon data</h1>
            @if(!empty($paginationData) && $paginationData->count())
                @foreach($paginationData as $key => $value)
                <div class="card tabcard" style="width: 18rem;">
                  <div class="card-header">
                    {{ $value['name'] }}
                  </div>
                  <div class="card-body">
                    <a href="{{ $value['url'] }}" >{{ $value['url'] }}</a>
                  </div>
                </div>                        
                @endforeach
            @else                
                <div colspan="10">There are no data.</div>
            @endif
            <div class="content">
                <div class="d-flex justify-content-center">
                {!! $paginationData->links() !!}
            </div>  
                
            </div>  

        </div>
        
                     
        
    </body>
</html>
