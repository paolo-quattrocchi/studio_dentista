
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$img}}" alt="...">
    <div class="card-body">
      @if(isset($name))
      <h5 class="card-title">{{$name}} {{$surname}}</h5>
      <p class="card-text">{{$description}}</p>
      @elseif(isset($services))
      <h5 class="card-title">{{$services}}</h5>
      <p class="card-text">{{$description}}</p>
      @endif
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

