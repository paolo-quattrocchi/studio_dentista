
<x-layout>
  <h1 class="display-4 my-5 font-weight-bold text-center text-capitalize">Il nostro staff</h1>
    <div class="container my-5 py-5">
            <div class="row">
                @foreach ($staff as $team)
                  <div class="col-12 col-md-4 my-3">
                    <x-card
                    name="{{$team['name']}}"
                    surname="{{$team['surname']}}"
                    img="{{$team['img']}}"
                    description="{{$team['description']}}"
                    />          
                  </div>             
                @endforeach
            </div>
    </div>
</x-layout>


