<!DOCTYPE html>
<html>
@if (Session::get('logovan') == 0)
        <script>
            window.location.replace("/admin");
        </script>
@endif
<head>
	<title>{{ Firma::naziv() }}-menu</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	.btn{
    		width: 200px;
    		position: relative;
    		margin-left: 45%;
    	}
    </style>
</head>
<body>
	<div class="vraper"><!-- 
	<br><br><br><br><br><br><br><br> -->
	<a href="/pacijenti" class="btn btn-info">Pacijenti</a><br><br>
	<a href="/zakazani-termini" class="btn btn-info">Zakazani Termini</a><br><br>
	<a href="/istorija" class="btn btn-info">Istorija</a><br><br>
	<a href="/admin" class="btn btn-info">Odjava</a>
  </div>
</body>
</html>
