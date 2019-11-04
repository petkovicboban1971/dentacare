<!DOCTYPE html>
<html lang="en">
@if (Session::get('logovan') == 0)
        <script>
            window.location.replace("/admin");
        </script>
@endif
<head>
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
<script type="text/javascript">
$(document).ready(function(){
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>
</head>
<body>
	<a href="/menu" style="position: absolute; margin-left: 50px;  margin-top: 50px;">
    <i class="fa fa-caret-left" style="font-size:48px;"></i>
    </a>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
			            <h2><b>Istorija termina</b></h2>
			        </div>
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
                        <th>Potvrdio tel.pozivom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Tretman overio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Termin otkazao&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($data as $key => $test)
                        @if((($stranica-1)*10 < $key+1) && ($key < $stranica*10))
                            @if($test->otkazao != 0)
                                <tr style="background-color: #ff3333; color: black;">
                            @else
                                <tr>
                            @endif  
                                    <td>{{ $test->ime }}</td>
                                    <td>{{ $test->jmbg }}</td>
                                    <td>{{ $test->email }}</td>
                                    <td>{{ $test->telefon }}</td>
                                    <td>{{ date_format(date_create($test->datum) ,"d.m.Y.") }}</td>
                                    <td>{{ $test->vreme }}</td>
                                    <td>{{ $test->poruka }}</td>
                                    <td>{{ date_format(date_create($test->created_at) ,"d.m.Y.") }}</td>
                                    @if($test->potvrdio != 0)
                                      <td>{{ Osoblje::find($test->potvrdio)->naziv }} {{ date_format(date_create($test->potvrdioDatum) ,"d.m.Y.") }}</td>
                                    @else
                                      <td></td>
                                    @endif
                                    @if($test->uneo != 0)
                                      <td>{{ Osoblje::find($test->uneo)->naziv }} {{ date_format(date_create($test->uneoDatum) ,"d.m.Y.") }}</td>
                                    @else
                                      <td></td>
                                    @endif
                                    @if($test->otkazao != 0)
                                      <td>{{ Osoblje::find($test->otkazao)->naziv }} {{ date_format(date_create($test->otkazaoDatum) ,"d.m.Y.") }}</td>
                                    @else
                                      <td></td>
                                    @endif
                                </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <?php $prom = "istorija"; ?>
			      @include('partials/pagination')  
        </div>
    </div>
  
</body>
</html>                                                               