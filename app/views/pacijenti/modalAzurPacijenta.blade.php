<!-- Edit Modal HTML -->
@if (Session::get('logovan') == 0)
        <script>
            window.location.replace("/admin");
        </script>
@endif
  <div id="azuriranjePacijenta" class="modal fade" tabindex="-1">
      <div class="modal-dialog" role="dialog">
          <div class="modal-content">
              <form action="/azurirani-pacijent" method="post">
                  <div class="modal-header">            
                      <h4 class="modal-title">Ažuriranje podataka pacijenata</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">          
                      <div class="form-group">
                          <label>Ime i prezime</label>
                          <input type="text" name="ime" placeholder="{{ $data1->ime }}" class="form-control">
                          <input type="hidden" name="id" value="{{ $data1->id }}">
                          <input type="hidden" name="str" value="{{ $stranica }}">
                      </div>
                      <div class="form-group">
                          <label>Datum rođenja</label>
                          <input type="text" name="jmbg" placeholder="{{ $data1->jmbg }}" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>E-mail</label>
                          <input type="email" name="email" placeholder="{{ $data1->email }}"class="form-control">
                      </div>
                      <div class="form-group">
                          <label>Adresa</label>
                          <textarea class="form-control" placeholder="{{ $data1->adresa }}" name="adresa"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Telefon</label>
                          <input type="text" name="telefon" placeholder="{{ $data1->telefon }}" class="form-control">
                      </div>          
                  </div>
                  <div class="modal-footer">
                      <input type="button" class="btn btn-default" data-dismiss="modal" value="Otkaži">
                      <input type="submit" class="btn btn-info" value="Ažuriraj">
                  </div>
              </form>
          </div>
      </div>
  </div>