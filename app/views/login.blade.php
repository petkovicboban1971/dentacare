<!DOCTYPE html>
<html>
	<head>
		<link href="css/foundation.min.css" rel="stylesheet" type="text/css" />
		<link href="css/admin.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</head>

	<body class="body-login">
		<div class="color-overlay-image"></div>
		<div class="login-form-wrapper">
			<div class="login-form-wrapper__box">
				<div class="form-avatar">
					<a class="logo" href="https://bexter.rs" target="_blank" title="Bexter design"><img src="images\b.png" alt="Bexter design"></a>
				</div>
				<form action="/admin-login-store" method="post" class="" autocomplete="off">
					
		<a href="http://local.dentacare" class="button" style="color: white;">LIVE</a>
					<div class="field-group">
						<input class="login-form__input input_placeholder" placeholder="korisni&#269ko ime" name="username" type="text" value="{{ Input::old('username') ? Input::old('username') : '' }}" >
					</div>
					<div class="field-group">
						<input class="login-form__input input_placeholder" id="login-pass1" placeholder="lozinka" name="password" type="password" value="{Input::old('password') ? Input::old('password') : '' }}">
					</div>
						<button type="submit" class="login-form-button admin-login">Prijava</button>
				</form>
				<div class="field-group error-login">
				<?php
					if($errors->first('username')){
						echo $errors->first('username');
					}elseif($errors->first('password')){
						echo $errors->first('password');
					} ?>
				</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="base_url" value="/login" />
	<script type="text/javascript">
		$('#login-pass2').hide();
		$("#show-pass").click(function(){
			$('#login-pass2').val($('#login-pass1').val());
			$('#login-pass2').toggle();
			$('#login-pass1').toggle();
		});
	</script>
</body>
</html>
