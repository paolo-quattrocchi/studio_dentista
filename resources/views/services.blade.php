<x-layout>
    <div class="container my-5 py-5 bg-dark">
        <div class="col-12">
            <h2>Ecco i nostri servizi!</h2>
            <div class="row">
                @foreach ($services as $value)
                  <div class="col-12 col-md-4 my-3">
                    <x-card
                    name={{$value['name']}};
                    surname={{$value['surname']}};
                    image={{$value['img']}};
                    description={{$value['description']}}
                    />          
                  </div> 
                  </div>             
                @endforeach
            </div>
        </div>
    </div>
</x-layout>