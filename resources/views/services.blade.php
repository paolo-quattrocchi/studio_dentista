<x-layout>
    <div class="container my-5 py-5">
        <div class="col-12">
            <h2>Ecco i nostri servizi!</h2>
            <div class="row">
                @foreach ($services as $service)
                  <div class="col-12 col-md-4 my-3">
                    <x-card
                    name="{{$service['name']}}"
                    surname="{{$service['surname']}}"
                    img="{{$service['img']}}"
                    description="{{$service['description']}}"
                    />          
                  </div> 
                               
                @endforeach
            </div>
        </div>
    </div>
</x-layout>