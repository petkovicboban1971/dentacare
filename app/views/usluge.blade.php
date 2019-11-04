@include('partials/header')

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/index">{{ Langauge::lang(1, Session::get('jezik')) }}</a></span> <span>Services</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Service Keeps you Smile</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Service Keeps you Smile</h2>
            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{ Langauge::lang(36, Session::get('jezik')) }}</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Teeth Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Quality Brackets</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-anesthesia"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Modern Anesthetic</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>

          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Dental Calculus</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-bacteria"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Paradontosis</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dentist"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Dental Implants</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tooth Braces</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">{{ Langauge::lang(82, Session::get('jezik')) }}</h2>
	            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="14">0</strong>
		                <span>{{ Langauge::lang(83, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>{{ Langauge::lang(84, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>{{ Langauge::lang(85, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>{{ Langauge::lang(29, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">{{ Langauge::lang(30, Session::get('jezik')) }}</h2>
            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">{{ Langauge::lang(76, Session::get('jezik')) }}</h3>
	        			<p><span class="price">&euro;24.50</span> <span class="per">/ {{ Langauge::lang(78, Session::get('jezik')) }}</span></p>
	        		</div>
        			<ul>
        				<li>{{ Langauge::lang(32, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(33, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(34, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(35, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(36, Session::get('jezik')) }}</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">{{ Langauge::lang(77, Session::get('jezik')) }}</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">{{ Langauge::lang(86, Session::get('jezik')) }}</h3>
	        			<p><span class="price">&euro;34.50</span> <span class="per">/ {{ Langauge::lang(78, Session::get('jezik')) }}</span></p>
	        		</div>
        			<ul>
        				<li>{{ Langauge::lang(32, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(33, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(34, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(35, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(36, Session::get('jezik')) }}</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">{{ Langauge::lang(77, Session::get('jezik')) }}</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">{{ Langauge::lang(87, Session::get('jezik')) }}</h3>
	        			<p><span class="price">&euro;54.50</span> <span class="per">/ {{ Langauge::lang(78, Session::get('jezik')) }}</span></p>
	        		</div>
        			<ul>
        				<li>{{ Langauge::lang(32, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(33, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(34, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(35, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(36, Session::get('jezik')) }}</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">{{ Langauge::lang(77, Session::get('jezik')) }}</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">{{ Langauge::lang(88, Session::get('jezik')) }}</h3>
	        			<p><span class="price">&euro;89.50</span> <span class="per">/ {{ Langauge::lang(78, Session::get('jezik')) }}</span></p>
	        		</div>
        			<ul>
        				<li>{{ Langauge::lang(32, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(33, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(34, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(35, Session::get('jezik')) }}</li>
								<li>{{ Langauge::lang(36, Session::get('jezik')) }}</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">{{ Langauge::lang(77, Session::get('jezik')) }}</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">{{ Firma::naziv() }}.</h2>
              <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">{{ Langauge::lang(65, Session::get('jezik')) }}</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">{{ Langauge::lang(2, Session::get('jezik')) }}</a></li>
                <li><a href="#" class="py-2 d-block">{{ Langauge::lang(66, Session::get('jezik')) }}</a></li>
                <li><a href="#" class="py-2 d-block">{{ Langauge::lang(67, Session::get('jezik')) }}</a></li>
                <li><a href="#" class="py-2 d-block">{{ Langauge::lang(68, Session::get('jezik')) }}</a></li>
                <li><a href="#" class="py-2 d-block">{{ Langauge::lang(5, Session::get('jezik')) }}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">{{ Langauge::lang(69, Session::get('jezik')) }}</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{ Langauge::lang(70, Session::get('jezik')) }}</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{ Langauge::lang(70, Session::get('jezik')) }}</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">{{ Langauge::lang(71, Session::get('jezik')) }}</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{ Firma::adresa() }}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+381 64 1321 587</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">office@bexter.rs</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{ Langauge::lang(7, Session::get('jezik')) }} <i class="icon-heart" aria-hidden="true"></i> by <a href="https://collorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="{{ Langauge::lang(10, Session::get('jezik')) }}">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="{{ Langauge::lang(11, Session::get('jezik')) }}">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" placeholder="{{ Langauge::lang(12, Session::get('jezik')) }}">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" placeholder="{{ Langauge::lang(13, Session::get('jezik')) }}">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="{{ Langauge::lang(14, Session::get('jezik')) }}"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="{{ Langauge::lang(9, Session::get('jezik')) }}" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>