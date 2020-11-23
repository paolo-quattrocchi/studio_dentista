
<x-layout>
  <header class="header">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-12">
          {{-- <h1 class="text-first font-weight-bold font-italic">
            Tornerai ad avere un sorriso smagliante
          </h1> --}}
        </div>
      </div>
    </div>
  </header>
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




