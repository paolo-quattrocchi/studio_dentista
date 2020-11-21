
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$img}}" alt="...">
    <div class="card-body">
      @if(isset($staff))
      <h5 class="card-title">{{$name}} {{$surname}}</h5>
      @elseif(isset($services))
      <p class="card-text">{{$description}}</p>
      @endif
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

