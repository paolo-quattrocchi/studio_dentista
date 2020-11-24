
<x-layout>
  <x-slot name='title'>Staff</x-slot>
  <x-slot name='style'></x-slot>
  <x-header />
  
  <div class="container my-5 py-5">
    <h2 class="display-4 my-5 font-weight-bold text-center text-first text-capitalize">Il nostro staff</h2>
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
  <x-slot name='scripts'></x-slot>
</x-layout>




