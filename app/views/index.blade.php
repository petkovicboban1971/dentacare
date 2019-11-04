
    @include('partials/header')

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ Langauge::lang(22, Session::get('jezik')) }}{{ Firma::naziv() }}</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ Langauge::lang(18, Session::get('jezik')) }}</p>
              <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">{{ Langauge::lang(9, Session::get('jezik')) }}</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ Langauge::lang(16, Session::get('jezik')) }}</h1>
              <p class="mb-4">{{ Langauge::lang(18, Session::get('jezik')) }}</p>
              <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">{{ Langauge::lang(9, Session::get('jezik')) }}</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/dental2.png');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ Langauge::lang(21, Session::get('jezik')) }}</h1>
              <p class="mb-4">{{ Langauge::lang(19, Session::get('jezik')) }}</p>
              <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">{{ Langauge::lang(9, Session::get('jezik')) }}</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/dental5.png');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ Langauge::lang(20, Session::get('jezik')) }}</h1>
              <p class="mb-4">{{ Langauge::lang(15, Session::get('jezik')) }}</p>
              <p><a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal" data-target="#modalRequest">{{ Langauge::lang(9, Session::get('jezik')) }}</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
    				<h3 class="mb-4">{{ Langauge::lang(47, Session::get('jezik')) }}</h3>
    				<p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
    				<span class="phone-number">+381 64 1321 587</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">{{ Langauge::lang(48, Session::get('jezik')) }}</h3>
    				<p class="openinghours d-flex">
    					<span>{{ Langauge::lang(49, Session::get('jezik')) }}</span>
    					<span>8:00 - 19:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>{{ Langauge::lang(50, Session::get('jezik')) }}</span>
    					<span>10:00 - 17:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>{{ Langauge::lang(51, Session::get('jezik')) }}</span>
    					<span>10:00 - 16:00</span>
    				</p>
    			</div>
    			<div class="col-md-6 color-3 p-4">
    				<h3 class="mb-2">{{ Langauge::lang(9, Session::get('jezik')) }}</h3>
    				<form action="/zakazan-termin" class="appointment-form" method="post">
	            <div class="row">
	            	<div class="col-sm-4">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="appointment_message" id="" class="form-control" required>
                      	<option selected disabled>{{ Langauge::lang(58, Session::get('jezik')) }}</option>
                        <option value="{{ Langauge::lang(36, Session::get('jezik')) }}">{{ Langauge::lang(36, Session::get('jezik')) }}</option>
                        <option value="{{ Langauge::lang(55, Session::get('jezik')) }}">{{ Langauge::lang(55, Session::get('jezik')) }}</option>
                        <option value="{{ Langauge::lang(56, Session::get('jezik')) }}">{{ Langauge::lang(56, Session::get('jezik')) }}</option>
                        <option value="{{ Langauge::lang(57, Session::get('jezik')) }}">{{ Langauge::lang(57, Session::get('jezik')) }}</option>
                      </select>
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" name="appointment_name" placeholder="{{ Langauge::lang(10, Session::get('jezik')) }}" required>
			            </div>
	              </div>
	              <div class="col-sm-4">
                  <div class="form-group">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" name="jmbg" placeholder="{{ Langauge::lang(64, Session::get('jezik')) }}" required>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-paper-plane"></span></div>
			              <input type="text" class="form-control" name="appointment_email" placeholder="{{ Langauge::lang(11, Session::get('jezik')) }}">
			            </div>
	              </div> -->
	            </div>
	            <div class="row">
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-calendar"></span></div>
	                  <input type="text" class="form-control appointment_date" name="appointment_date" placeholder="{{ Langauge::lang(12, Session::get('jezik')) }}" required>
	                </div>    
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-clock"></span></div>
	                  <input type="text" class="form-control appointment_time" name="appointment_time" placeholder="{{ Langauge::lang(13, Session::get('jezik')) }}" required>
	                </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-phone2"></span></div>
	                  <input type="text" class="form-control" name="appointment_phone" placeholder="{{ Langauge::lang(17, Session::get('jezik')) }}" required>
	                </div>
	              </div>
	            </div>
	            
	            <div class="form-group">
	              <input type="submit" value="{{ Langauge::lang(9, Session::get('jezik')) }}" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
  
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">{{ Langauge::lang(53, Session::get('jezik')) }}</h2>
            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{ Langauge::lang(36, Session::get('jezik')) }}</h3>
                <p>{{ Langauge::lang(54, Session::get('jezik')) }}</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{ Langauge::lang(55, Session::get('jezik')) }}</h3>
                <p>{{ Langauge::lang(54, Session::get('jezik')) }}</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{ Langauge::lang(56, Session::get('jezik')) }}</h3>
                <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
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
                <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url(images/about-2.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
		            <h2 class="mb-2">{{ Firma::naziv()}}{{ Langauge::lang(72, Session::get('jezik')) }}</h2>
		            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>{{ Langauge::lang(73, Session::get('jezik')) }}</h3>
	      					<p>{{ Langauge::lang(31, Session::get('jezik')) }} </p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>{{ Langauge::lang(74, Session::get('jezik')) }}</h3>
	      					<p>{{ Langauge::lang(31, Session::get('jezik')) }} </p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>{{ Langauge::lang(75, Session::get('jezik')) }}</h3>
	      					<p>{{ Langauge::lang(31, Session::get('jezik')) }} </p>
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
            <h2 class="mb-3">{{ Langauge::lang(23, Session::get('jezik')) }}</h2>
            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Gvozden Mandušić</a></h3>
      					<span class="position">{{ Langauge::lang(24, Session::get('jezik')) }}</span>
      					<div class="text">
	        				<p>{{ Langauge::lang(31, Session::get('jezik')) }}</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_6.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Uroš Perašević</a></h3>
      					<span class="position">{{ Langauge::lang(24, Session::get('jezik')) }}</span>
      					<div class="text">
	        				<p>{{ Langauge::lang(31, Session::get('jezik')) }}</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_7.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tea Sibinović</a></h3>
      					<span class="position">{{ Langauge::lang(24, Session::get('jezik')) }}</span>
      					<div class="text">
	        				<p>{{ Langauge::lang(31, Session::get('jezik')) }}</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_8.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Sekulović</a></h3>
      					<span class="position">{{ Langauge::lang(44, Session::get('jezik')) }}</span>
      					<div class="text">
	        				<p>{{ Langauge::lang(31, Session::get('jezik')) }}</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
        <div class="row  mt-5 justify-conten-center">
        	<div class="col-md-8 ftco-animate">
        		<p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">{{ Langauge::lang(25, Session::get('jezik')) }}</h2>
	            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="14">0</strong>
		                <span>{{ Langauge::lang(26, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>{{ Langauge::lang(27, Session::get('jezik')) }}</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>{{ Langauge::lang(28, Session::get('jezik')) }}</span>
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

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>{{ Langauge::lang(37, Session::get('jezik')) }}</h2>
              <p>{{ Langauge::lang(31, Session::get('jezik')) }}</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="{{ Langauge::lang(79, Session::get('jezik')) }}">
                      <input type="submit" value="{{ Langauge::lang(80, Session::get('jezik')) }}" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">{{ Langauge::lang(38, Session::get('jezik')) }}</h2>
            <span class="subheading">{{ Langauge::lang(39, Session::get('jezik')) }}</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ Langauge::lang(31, Session::get('jezik')) }}</p>
                    <p class="name">Sergej Markov</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ Langauge::lang(31, Session::get('jezik')) }} </p>
                    <p class="name">Aleksej Milojković</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ Langauge::lang(31, Session::get('jezik')) }} </p>
                    <p class="name">Radovoje Menković</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ Langauge::lang(31, Session::get('jezik')) }} </p>
                    <p class="name">Dalibor Vučković</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">{{ Langauge::lang(31, Session::get('jezik')) }} </p>
                    <p class="name">Branislav Maslaković</p>
                    <span class="position">{{ Langauge::lang(44, Session::get('jezik')) }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">{{ Langauge::lang(40, Session::get('jezik')) }}</h2>
            <p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">{{ Langauge::lang(70, Session::get('jezik')) }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">{{ Langauge::lang(70, Session::get('jezik')) }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">{{ Langauge::lang(52, Session::get('jezik')) }}</a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
    				<div class="heading-section heading-section-white mb-5 ftco-animate">
	            <h2 class="mb-2">{{ Firma::naziv()}}{{ Langauge::lang(42, Session::get('jezik')) }}</h2>
	          </div>
	          <div class="ftco-animate">
	          	<p>{{ Langauge::lang(52, Session::get('jezik')) }}</p>
	          	<ul class="un-styled my-5">
	          		<li><span class="icon-check"></span>Consectetur adipisicing elit</li>
	          		<li><span class="icon-check"></span>Adipisci repellat accusamus</li>
	          		<li><span class="icon-check"></span>Tempore reprehenderit vitae</li>
	          	</ul>
	          </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	            <h2 class="mb-2">{{ Langauge::lang(41, Session::get('jezik')) }}</h2>
	          </div>
	          <form action="#" class="ftco-animate">
	          	<div class="row">
	          		<div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="{{ Langauge::lang(10, Session::get('jezik')) }}">
		              </div>
	              </div>
	              <div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="{{ Langauge::lang(11, Session::get('jezik')) }}">
		              </div>
	              </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="{{ Langauge::lang(17, Session::get('jezik')) }}">
		              </div>
		            </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="{{ Langauge::lang(45, Session::get('jezik')) }}">
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{ Langauge::lang(14, Session::get('jezik')) }}"></textarea>
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <input type="submit" value="{{ Langauge::lang(41, Session::get('jezik')) }}" class="btn btn-primary py-3 px-5">
		              </div>
	              </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>

  @include('partials/modalZakaziTermin')
  @include('partials/footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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