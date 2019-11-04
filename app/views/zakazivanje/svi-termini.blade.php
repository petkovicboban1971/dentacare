<!DOCTYPE html>
<html>
@if (Session::get('logovan') == 0)
        <script>
            window.location.replace("/admin");
        </script>
@endif
<head>
	<title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/tabelaIstorija.css">

<link rel="stylesheet" href="css/alertify.core.css">
<link rel="stylesheet" href="css/alertify.default.css">
<script src="js/alertify.js"></script>
<script type="text/javascript">
	function myFunction1(x){
		post('/potvrda', { potvrda:x });
	}
	function myFunction2(y){
		post('/odradjen', { odradjen:y });
	}
	function post(path, params, method) {
	    method = method || "post";

	    var form = document.createElement("form");
	    form.setAttribute("method", method);
	    form.setAttribute("action", path);

	    for(var key in params) {
	        if(params.hasOwnProperty(key)) {
	            var hiddenField = document.createElement("input");
	            hiddenField.setAttribute("type", "hidden");
	            hiddenField.setAttribute("name", key);
	            hiddenField.setAttribute("value", params[key]);
	            form.appendChild(hiddenField);
	        }
	    }
	    document.body.appendChild(form);
	    form.submit();
	}
$(document).ready(function(){
	  $('.potvrda').on('click', function(e){
      e.preventDefault();
      var link = $(this).data('link');
      alertify.confirm("Da li ste sigurni da želite da potvrdite termin?",
          function(e){
              if(e){
                  location.href = link;
              }
          });
    });

    $('.otkaz-termina').on('click', function(e){
      e.preventDefault();
      var link = $(this).data('link');
      alertify.confirm('Da li ste sigurni da želite da otkažete termin?',
          function(e){
              if(e){
                  location.href = link;
              }
          });
    });

      $('.odradjen').on('click', function(e){
      e.preventDefault();
      var link = $(this).data('link');
      alertify.confirm("Da li ste sigurni da je tretman izvršen?",
          function(e){
              if(e){
                  location.href = link;
              }
          });
    });
  });
</script>
</head>
<body>
  	@if(!empty(Session::get('message')))
        <script>
            alertify.success( "<?php echo Session::get('message') ?>" );
            <?php Session::forget('message'); ?>
        </script>
    @endif
    <a href="/menu" style="position: absolute; margin-left: 50px;  margin-top: 50px;">
        <i class="fa fa-caret-left" style="font-size:48px;"></i>
    </a>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Termini</b></h2>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <!-- <th>
                          <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                          </span>
                        </th> -->
                        <th>Ime</th>
                        <th>Datum rođenja</th>
                        <th>e-mail</th>
                        <th>Telefon</th>
            						<th>Datum</th>
            						<th>Vreme</th>
            						<th>Poruka</th>
            						<th>Poruka poslata</th>
            						<th>Otkaz termina</th>
            						<th>Potvrđeno tel.pozivom</th>
            						<th>Tretman izvršen</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($data as $key => $test)
                        @if((($stranica-1)*10 < $key+1) && ($key < $stranica*10))
                            <tr>  
                                @if(!($test->odradjen == true) AND ($test->otkaz == false))
                  									<td>{{ $test->ime }}</td>
                  									<td>{{ $test->jmbg }}</td>
                  									<td>{{ $test->email }}</td>
                  									<td>{{ $test->telefon }}</td>
                  									<td style="border: 1px solid #d9534f;">{{ date_format(date_create($test->datum), "d.m.Y.") }}</td>
                  									<td style="border: 1px solid #d9534f;">{{ $test->vreme }}</td>
                  									<td>{{ $test->poruka }}</td>
                  									<td>{{ date_format(date_create($test->created_at), "d.m.Y. h:m:s") }}</td>
                  									<td><button type="submit" class="btn btn-danger otkaz-termina" data-link="/otkaz-termina/{{ $test->termini_id }}"><b>Otkaži termin</b></button></td>
                  									@if( $test->potvrda == true )
                  										  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="true" disabled></td>
                  									@else
                  										  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="potvrda" data-link="/potvrda-termina/{{ $test->id }}"></td>
                  									@endif
                  									@if( $test->odradjen == true )
                  										  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="true" disabled></td>
                  									@else
                  										  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"class="odradjen" data-link="/odradjen/{{ $test->id }}"></td>
                  									@endif
                  								@endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        <?php $prom = "zakazani-termini"; ?>
		@include('partials/pagination')  
	</div>
</div>
</body>
</html>
