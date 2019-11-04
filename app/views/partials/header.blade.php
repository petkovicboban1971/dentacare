<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ Firma::naziv() }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <script src="js/alertify.js"></script>
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  
  </head>
  <body>
    @if(!empty(Session::get('message')))
        <script>
            alertify.success('<?php echo Langauge::lang(59, Session::get('jezik')) ?>');
        </script>
    @endif
    @if(!empty(Session::get('error')))
        <script>
            alertify.error('<?php echo Langauge::lang(63, Session::get('jezik')) ?>  <b><a href=""style="float:right;">OK</a></b>',0);
        </script>
    @endif
    <?php  
        if(!isset($stranica)){
            $stranica = 1;    
        }
    ?>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">        
	      <a class="navbar-brand" href="/index"<span>{{ Firma::naziv() }}</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                @if($stranica == 1)
                    <li class="selected">
                @else
                    <li>
                @endif
                      <a href="/index?stranica=1" class="nav-link">{{ Langauge::lang(1, Session::get('jezik')) }}</a>
                    </li>
                @if($stranica == 2)
                    <li class="selected">
                @else
                    <li>
                @endif
                        <a href="/o-nama?stranica=2" class="nav-link">{{ Langauge::lang(2, Session::get('jezik')) }}</a>
                    </li>
                @if($stranica == 3)
                    <li class="selected">
                @else
                    <li>
                @endif
                        <a href="/usluge?stranica=3" class="nav-link">{{ Langauge::lang(3, Session::get('jezik')) }}</a>
                    </li>
                @if($stranica == 4)
                    <li class="selected">
                @else
                    <li>
                @endif
                        <a href="/doktori?stranica=4" class="nav-link">{{ Langauge::lang(4, Session::get('jezik')) }}</a>
                    </li>
                @if($stranica == 6)
                    <li class="selected">
                @else
                    <li>
                @endif
                        <a href="/blog?stranica=6" class="nav-link">{{ Langauge::lang(6, Session::get('jezik')) }}</a>
                    </li>
                @if($stranica == 5)
                    <li class="selected">
                @else
                    <li>
                @endif
                        <a href="/kontakt?stranica=5" class="nav-link">{{ Langauge::lang(5, Session::get('jezik')) }}</a>
                    </li>              
                <li class="nav-item cta">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>{{ Langauge::lang(9, Session::get('jezik')) }}</span>
                    </a>
                </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
 @include('partials/modalZakaziTermin')
  <div class="jezici">
    <form action="/index">
      <input type="submit" name="jezik" style="width: 50px;" class="btn btn-primary btn-sm" value="lat"></>
      <input type="submit" name="jezik" style="width: 50px;" class="btn btn-primary btn-sm" value="eng"></>
      <input type="submit" name="jezik" style="width: 50px;" class="btn btn-primary btn-sm" value="cir"></>
    </form>
  </div>