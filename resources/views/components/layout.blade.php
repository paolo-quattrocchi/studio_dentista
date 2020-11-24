<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{$style}}


    <!-- Scripts -->
    
   
  </head>
  <body>
    
    
    <x-navbar />
    
    
    
    
    
    
    {{$slot}}
    
    
    <x-footer />
    
    <script src="{{ asset('js/app.js') }}"></script>
    {{$scripts}}
</body>
</html>