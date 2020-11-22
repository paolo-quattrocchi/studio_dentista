 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-first">
    

    <a class="navbar-brand" href="/"> <img class="logo" src="/img/cover.png" height="100 px" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-second"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="/">Home</a>
        </li>
        <li class="nav-item font-weight-bold">
        <a class="nav-link " href="{{route('staff')}}">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="{{route('servicespage')}}">
            Servizi
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link font-weight-bold" href="{{route('contacts')}}">Contatti</a>
        </li>
      </ul>
    </div>


</nav>