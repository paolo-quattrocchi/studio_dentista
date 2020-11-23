
<div class="card align-items-center text-center">
    <img class="card-img-top" src="{{$img}}" alt="...">
    <div class="card-body">
      @if(isset($name))
      <h5 class="card-title">{{$name}} {{$surname}}</h5>
      <p class="card-text">{{$description}}</p>
      @elseif(isset($services))
      <h5 class="card-title">{{$services}}</h5>
      <p class="card-text">{{$description}}</p>
      <a href="/servicespage" class="btn btn-primary">Vai al servizio</a>
      @endif
      
    </div>
</div>

