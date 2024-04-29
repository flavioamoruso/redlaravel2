<x-layout>



    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <h2>Inserisci le card</h2>
            </div>
            <div class="col-12 col-md-6">
                <form>
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Descrizione</label>
                      <textarea class="form-control" name="description" cols="10" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" step="0.5" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Carica</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn">Invia</button>
                  </form>
            </div>
        </div>
    </div>





</x-layout>