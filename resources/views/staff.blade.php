<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Document</title>
</head>



    <div class="container-fluid">
        <div class="row">
           
            <div class="col-12">
                <h1>Ciao</h1>
                <div class="row">
                    @foreach ($staff as $team)
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$staff['img']}}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$staff['name']}} {{$staff['surname']}}</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        
                    </div>
                    @endforeach
                </div>
                    
            </div>
                
            
        </div>
    </div>



