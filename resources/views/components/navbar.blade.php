 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    

    <a class="navbar-brand" href="#"> <img src="/img/dentisti_aulab.png" height="100 px" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('staff')}}">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}" >
            Servizi
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        </li>
      </ul>
    </div>


</nav>
