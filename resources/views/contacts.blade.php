<x-layout>
    <div class="container-fluid my-5 py-5">
        <div class="row">
            <div class="col-12 col-md-6  my-5 py-5">
                <p class="h4">lascia qui i tuoi recapiti un nostro operatore ti richiamerà il più presto possibile per fissare un appuntamento in sede con i nostri migliori esperti</p>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="mb-3">Contattaci</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">nome</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">cognome</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">numero</label>
                            <input type="text" class="form-control" placeholder="340-0000000" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">trattamento</label>
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
                    <button type="submit" class="btn btn-lg btn-block btn-primary">prenota appuntamento</button>
                </form>
            </div>
        </div>
    </div>    
    </x-layout>
