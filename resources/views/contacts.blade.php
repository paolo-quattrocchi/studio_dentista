<x-layout>
    <x-slot name='title'>Contatti</x-slot>
    <x-slot name='style'></x-slot>
    
 
    <x-header />


    <div class="container my-5 py-5 shadow">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-3 text-center text-first">CONTATTACI</h3>
                <h2 class="mb-3 text-center">Richiedi un Appuntamento</h2>
            <form action="{{'contact_save'}}" method="POST">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        {{-- <div class="form-group col-md-6">
                            <label for="inputPassword4">Cognome</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div> --}}
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Numero</label>
                            <input type="tel" class="form-control" placeholder="340-0000000" id="phone" name="phone">
                        </div>
                        {{-- <div class="form-group col-md-6">
                            <label for="inputState">Trattamento</label>
                            <select id="inputState" class="form-control">
                                <option selected>trattamento</option>
                                <option>sbiancamento</option>
                                <option>panoramica</option>
                                <option>pulizia</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Messaggio</label>
                        <textarea class="form-control" placeholder="scrivi un messaggio" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                      </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox">
                            <label class="form-check-label" for="gridCheck">
                                Accetta termini e condizioni
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Prenota Appuntamento</button>
                </form>
            </div>
        </div>
    </div>
    <x-slot name='scripts'></x-slot>
    </x-layout>
