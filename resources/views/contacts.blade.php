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
    {{-- <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 col-md-6  my-5 py-5">
                <p class="lead">Lascia qui i tuoi recapiti un nostro operatore ti richiamerà il più presto possibile per fissare un appuntamento in sede con i nostri migliori esperti</p>
            </div>
            <div class="col-12 col-md-6 shadow py-5">
                <h3 class="mb-3">Contattaci</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cognome</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Numero</label>
                            <input type="text" class="form-control" placeholder="340-0000000" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Trattamento</label>
                            <select id="inputState" class="form-control">
                                <option selected>trattamento</option>
                                <option>sbiancamento</option>
                                <option>panoramica</option>
                                <option>pulizia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                ricordami
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Prenota Appuntamento</button>
                </form>
            </div>
        </div>
    </div> --}}


    <div class="container my-5 py-5 shadow">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-3 text-center text-first">CONTATTACI</h3>
                <h2 class="mb-3 text-center">Richiedi un Appuntamento</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cognome</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Numero</label>
                            <input type="text" class="form-control" placeholder="340-0000000" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Trattamento</label>
                            <select id="inputState" class="form-control">
                                <option selected>trattamento</option>
                                <option>sbiancamento</option>
                                <option>panoramica</option>
                                <option>pulizia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Messaggio</label>
                        <textarea class="form-control" placeholder="scrivi un messaggio" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                ricordami
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Prenota Appuntamento</button>
                </form>
            </div>
        </div>
    </div>
    </x-layout>
