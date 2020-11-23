<x-layout>
  {{-- <div class="container my-5 py-5">
      <div class="row mb-5">
          <div class="col-12 col-md-6">
            <img src="/img/4.jpg" height="400" width="600" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-md-6 mt-3">
            <h3>Igiene dentale</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere sed consequuntur voluptas. Ab, accusamus obcaecati? Ut fugit esse soluta? Atque autem quod harum beatae ipsam aspernatur deserunt! Distinctio, amet.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, officia ut? Sed harum illum unde explicabo. Expedita voluptatibus perspiciatis eveniet veritatis minima laudantium itaque, similique placeat fugit quisquam? Corporis, deleniti?</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus dicta nemo ipsum illo deserunt accusantium at explicabo repellat pariatur facilis eaque consequuntur voluptas, similique repellendus autem enim cupiditate sint nesciunt!</p>
          </div>
      </div>
      <div class="row mb-5 test">
        <div class="col-12 col-md-6 mt-3">
          <h3>Implantologia</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere sed consequuntur voluptas. Ab, accusamus obcaecati? Ut fugit esse soluta? Atque autem quod harum beatae ipsam aspernatur deserunt! Distinctio, amet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, officia ut? Sed harum illum unde explicabo. Expedita voluptatibus perspiciatis eveniet veritatis minima laudantium itaque, similique placeat fugit quisquam? Corporis, deleniti?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus dicta nemo ipsum illo deserunt accusantium at explicabo repellat pariatur facilis eaque consequuntur voluptas, similique repellendus autem enim cupiditate sint nesciunt!</p>
        </div>
        <div class="col-12 col-md-6">
          <img src="/img/5.jpg" height="400" width="600" alt="" class="img-fluid">
        </div>
        
    </div>
    <div class="row mb-5">
      <div class="col-12 col-md-6">
        <img src="/img/7.jpg" height="400" width="600" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 mt-3">
        <h3>Ortodonzia</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere sed consequuntur voluptas. Ab, accusamus obcaecati? Ut fugit esse soluta? Atque autem quod harum beatae ipsam aspernatur deserunt! Distinctio, amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, officia ut? Sed harum illum unde explicabo. Expedita voluptatibus perspiciatis eveniet veritatis minima laudantium itaque, similique placeat fugit quisquam? Corporis, deleniti?</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus dicta nemo ipsum illo deserunt accusantium at explicabo repellat pariatur facilis eaque consequuntur voluptas, similique repellendus autem enim cupiditate sint nesciunt!</p>
      </div>
  </div>
  </div> --}}



  <header class="bg-header-2">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-12">
        </div>
      </div>
    </div>
  </header>
  
  <div class="container my-5 py-5">
    <h1 class="display-4 my-5 font-weight-bold text-center text-capitalize">Dentisti Aulab</h1>
    <h3 class="text-center">Tornerai ad avere un sorriso smagliante</h3>
    <div class="row mb-5">
        <div class="col-12 col-md-6">
          <img src="/img/studio.jpeg" height="400" width="600" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md-6 mt-3">
          <h3>Il nostro studio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere sed consequuntur voluptas. Ab, accusamus obcaecati? Ut fugit esse soluta? Atque autem quod harum beatae ipsam aspernatur deserunt! Distinctio, amet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, officia ut? Sed harum illum unde explicabo. Expedita voluptatibus perspiciatis eveniet veritatis minima laudantium itaque, similique placeat fugit quisquam? Corporis, deleniti?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus dicta nemo ipsum illo deserunt accusantium at explicabo repellat pariatur facilis eaque consequuntur voluptas, similique repellendus autem enim cupiditate sint nesciunt!</p>
        </div>
    </div>
  </div>

  

  <div class="container my-5 py-5 ">
    <div class="col-12">
        <h2 class="text-first text-center">Ecco i nostri servizi!</h2>
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