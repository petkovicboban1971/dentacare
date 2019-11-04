<!-- <div id="map"></div> -->

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11610.180060960069!2d21.8870413!3d43.3237831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE5JzI1LjYiTiAyMcKwNTMnNDQuOSJF!5e0!3m2!1ssr!2srs!4v1558913243232!5m2!1ssr!2srs" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>{{ Langauge::lang(7, Session::get('jezik')) }}<i class="icon-heart" aria-hidden="true"></i> <a href="https://collorlib.com" target="_blank">Colorlib</a>
            <p>{{ Langauge::lang(8, Session::get('jezik')) }}<i class="icon-heart" aria-hidden="true"></i> <a href="https://bexter.rs" target="_blank">Bexter design</a></p>
          </div>
        </div>
      </div>
    </footer>