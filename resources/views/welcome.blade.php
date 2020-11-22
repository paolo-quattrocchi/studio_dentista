
<x-layout>

   <div class="container my-5 py-5">
     <div class="row">
       <div class="col-12 col-md-6">
       <img src="/img/estetica-dentale.jpg" alt="">
       </div>
       <div class="col-12 col-md-6">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Corporis magni esse accusamus consequatur dolore eius omnis repellat ipsa,
          fugit soluta quia expedita impedit sapiente quisquam nostrum at nihil quae dolor?</p>
      </div>
     </div>
   </div>
    
    <div class="container my-5 py-5 ">
        <div class="col-12">
            <h2 class="text-first">Ecco i nostri servizi!</h2>
            <div class="row">
                @foreach ($services as $service)
                  <div class="col-12 col-md-4 my-3">
                    <x-card
                    services="{{$service['servizio']}}"
                    img="{{$service['img']}}"
                    description="{{$service['description']}}"
                    />          
                  </div> 
                               
                @endforeach
            </div>
        </div>
    </div>


</x-layout>

