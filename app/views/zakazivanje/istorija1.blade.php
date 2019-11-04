<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/alertify.default.css">

</head>
<body>
<center><table class="tabelica">
	<tr>
		<th>Ime</th>
		<th>e-mail</th>
		<th>Telefon</th>
		<th>Datum</th>
		<th>Vreme</th>
		<th>Poruka</th>
		<th>Poruka poslata</th>
		<th>Potvrdio tel.pozivom</th>
		<th>Tretman overio</th>
		<th>Termin otkazao</th>
	</tr>
	@foreach($data as $test)
		<tr>
			@if(($test->odradjen != 0) && ($test->potvrda != 0))
				<tr style="background-color: #62aee0;">	
			@endif	
			@if(($test->odradjen == 0) && ($test->potvrda != 0))
				<tr style="background-color: #2e94ee;">
			@endif
			@if($test->otkaz != 0) 
				<tr style="background-color: red;">
			@endif	
			<td>{{ $test->ime }}</td>
			<td>{{ $test->email }}</td>
			<td>{{ $test->phone }}</td>
			<td>{{ date_format(date_create($test->datum) ,"d.m.Y.") }}</td>
			<td>{{ $test->vreme }}</td>
			<td>{{ $test->poruka }}</td>
			<td>{{ date_format(date_create($test->created_at) ,"d.m.Y. h:m:s") }}</td>
			@if($test->potvrdio != 0)
				<td>{{ Osoblje::find($test->potvrdio)->naziv }} {{ date_format(date_create($test->potvrdioDatum) ,"d.m.Y. h:m:s") }}</td>
			@endif
			@if($test->uneo != 0)
				<td>{{ Osoblje::find($test->uneo)->naziv }} {{ date_format(date_create($test->uneoDatum) ,"d.m.Y. h:m:s") }}</td>
			@endif
		</tr>
	@endforeach
</table><br></center>
<center><a href="/menu" class="btn btn-info">NAZAD</a></center>
</body>
</html>
