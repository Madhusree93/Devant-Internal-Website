@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 serviceslist_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 OUR SERVICES
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
										<li><a href="{{route('index')}}">Home</a></li>
									    <li>Services</li>
									</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ======================================services area section============================= --> 
   <section class="cmpnyservice_outsection nogaparea">
    <div class="container">
          <div class="row">
                <div class="col-lg-12 innerservice_outsection">
              <div class="row">
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">01</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-1.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Web Developmet</h4>
                                <p>Web development refers to the process of creating and maintaining websites or web applications.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">02</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-2.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Mobile App Developmet</h4>
                                <p>Mobile app development refers to the process of creating software applications.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">03</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-4.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Custom Website</h4>
                                <p>A custom website refers to a website that is built from scratch or tailored specifically.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">04</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-5.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Video Animation</h4>
                                <p>Video animation refers to the process of creating moving {{asset('public/website')}}/assets/images, typically using a sequence of still {{asset('public/website')}}/assets/images.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">05</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-3.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Digital Marketing</h4>
                                <p>Digital marketing encompasses all marketing efforts that use electronic devices or the internet.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4">
                          <div class="bservice_boxsnglarea">
                                  <span class="count_numberservice">06</span>
                                  <div class="service_icons">
                              <i><img src="{{asset('public/website')}}/assets/images/service-icon-7.png" alt=""></i>
                            </div>
                            <div class="servicemain_contentarea">
                                <h4>Graphics Design</h4>
                                <p>Graphic design is the art and practice of planning and projecting visual and textual content.</p>
                                <a href="#">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                            </div>
                          </div>
                    </div>
              </div>
                </div>
          </div>
    </div>
</section>
   <!-- ======================================services area section============================= -->

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection