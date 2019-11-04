
    <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">{{ Langauge::lang(9, Session::get('jezik')) }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/zakazan-termin" method="post">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" name="appointment_name" placeholder="{{ Langauge::lang(10, Session::get('jezik')) }}" required>
            </div>
            <div class="form-group">
              <!-- <label for="appointment_phone" class="text-black">Phone</label> -->
              <input type="text" class="form-control" name="appointment_phone" placeholder="{{ Langauge::lang(17, Session::get('jezik')) }}" required>
            </div>
            <div class="form-group">
              <!-- <label for="jmbg" class="text-black">jmbg</label> -->
              <input type="text" class="form-control" name="jmbg" placeholder="{{ Langauge::lang(64, Session::get('jezik')) }}" required>
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" name="appointment_email" placeholder="{{ Langauge::lang(11, Session::get('jezik')) }}">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" name="appointment_date" placeholder="{{ Langauge::lang(12, Session::get('jezik')) }}" required>
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" name="appointment_time" placeholder="{{ Langauge::lang(13, Session::get('jezik')) }}" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="appointment_message" class="form-control" cols="30" rows="5" placeholder="{{ Langauge::lang(14, Session::get('jezik')) }}" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="{{ Langauge::lang(9, Session::get('jezik')) }}" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>