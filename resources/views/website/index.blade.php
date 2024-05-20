@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')

   <!-- ==================================nav bar============================================= -->

   <!-- ==================================slider section====================================== -->
   <div class="container-fluid">
   	  <div class="row">
   	   	  <div class="col-lg-12 slider_mainoutsection">
   	   	   	  <div class="container">
   	   	   	  	  <div class="row">
   	   	   	  	  	  <div class="col-lg-6">
   	   	   	  	  	  	 <div class="leftbanner_outsection">
   	   	   	  	  	  	 	  <h1 class="syour_textdesign">
   	   	   	  	  	  	 	   	Seamless Solutions, Unique to You: Transforming Your
   	   	   	  	  	  	 	  </h1>
   	   	   	  	  	  	 	  <h2 class="bdtextdesign_section">
   	   	   	  	  	  	 	  	Business Digitally!
   	   	   	  	  	  	 	  </h2>
   	   	   	  	  	  	 	  <div class="buttons_ocbtnareaok">
												  			<button class="blob-btn">
														    LET'S TALK
														    <span class="blob-btn__inner">
														      <span class="blob-btn__blobs">
														        <span class="blob-btn__blob"></span>
														        <span class="blob-btn__blob"></span>
														        <span class="blob-btn__blob"></span>
														        <span class="blob-btn__blob"></span>
														      </span>
														    </span>
												  			</button>
											    			<br/>
																<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
												  <defs>
												    <filter id="goo">
												      <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
												      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
												      <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
												    </filter>
												  </defs>
																</svg>
									          </div>
									          <div class="cultchimg_outarea">
									             <img src="{{asset('public/website')}}/assets/images/clutches.png" class="clutchimg_design">
									          </div>   
									          <h6 class="lpin_textdesign">Leading Enterprise Solution Partner in India</h6>
   	   	   	  	  	  	 </div>
   	   	   	  	  	  </div>
   	   	   	  	  	  <div class="col-lg-6">
   	   	   	  	  	  	 <div class="rightbanner_outsection">
   	   	   	  	  	  	 	  <img src="{{asset('public/website')}}/assets/images/hero.png" class="rightbannner_upimgdesign">
   	   	   	  	  	  	 </div>
   	   	   	  	  	  </div>
   	   	   	  	  </div>
   	   	   	  </div> 
   	   	  </div>
   	  </div>
   </div>
   <!-- ==================================slider section====================================== -->
   
   <!-- ==================================about us section==================================== -->
    <div class="container">
       	  <div class="row">
       	   	  <div class="col-lg-12">
       	   	  	<div class="aboutus_outsection">
       	   	   	  <div class="row">
       	   	   	  	  <div class="col-lg-5">
       	   	   	  	  	  <div class="aboutus_innerleftsection">
       	   	   	  	  	  	  <h1 class="lefthdng_textdesign">
											 Professional IT Solution Provider In India

       	   	   	  	  	  	  </h1>
       	   	   	  	  	  	  <p class="abtp_textdesign">
											 Popular IT solution providers in India offer a comprehensive range of services to cater
to diverse business needs. Devant IT Solutions is a one-stop solution for all your IT
requirements, right from development to user testing. Our dedicated developers are
proficient across various platforms and use their expertise to design, implement, and
manage IT systems that optimize efficiency, enhance security, and drive innovation
within your organization.
       	   	   	  	  	  	  </p>
       	   	   	  	  	  	  <a class="abthangbtn" href="{{route('the_devant_way')}}">
															  <span>Let’s start a collaboration</span>
															  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 32 32">
															    <g>
															      <path d="M26.68 3.867H8.175a1 1 0 0 0 0 2h16.544L4.2 26.387A1 1 0 1 0 5.613 27.8l20.52-20.52v16.545a1 1 0 0 0 2 0V5.321a1.456 1.456 0 0 0-1.453-1.454z" fill="#000000"></path>
															    </g>
															  </svg>
															</a>
       	   	   	  	  	  </div>
       	   	   	  	  </div>
       	   	   	  	  <div class="col-lg-7">
       	   	   	  	  	 <div class="aboutus_innerrightsection">
       	   	   	  	  	  	<img src="{{asset('public/website')}}/assets/images/about-ussectionimg.jpg" class="aboutus_imgdesign">
       	   	   	  	  	  	<div class="abtvideo_sectionbckcolor"></div>
       	   	   	  	  	  	<img src="{{asset('public/website')}}/assets/images/logo-white.png" class="vdobox_sectionlogodesign">
       	   	   	  	  	  	<div class="opulsebtn_area">
	       	   	   	  	  	  	<a id="play-video" class="video-play-button" href="#">
	                               <span></span>
	                            </a>
															<div id="video-overlay" class="video-overlay">
															  <a class="video-overlay-close">&times;</a>
															</div>
														</div>
														<h2 class="wadabt_textdesign">
															WE ARE <span class="ourname_txtbld">DEVANT</span>
														</h2>
       	   	   	  	  	 </div>
       	   	   	  	  </div>
       	   	   	  </div>
       	   	   	  <div class="row">
       	   	   	  	  <div class="col-lg-3 col-6">
       	   	   	  	  	  <div class="pointbox_outarea">
       	   	   	  	  	  	  <h1 class="abtnmbercnt_textdesign">
       	   	   	  	  	  	  	600+
       	   	   	  	  	  	  </h1>
       	   	   	  	  	  	  <h6 class="abtp_textdesign1">Strong Team</h6>
       	   	   	  	  	  </div>
       	   	   	  	  </div>
       	   	   	  	  <div class="col-lg-3 col-6">
       	   	   	  	  	  <div class="pointbox_outarea">
       	   	   	  	  	  	  <h1 class="abtnmbercnt_textdesign">
       	   	   	  	  	  	  	350+
       	   	   	  	  	  	  </h1>
       	   	   	  	  	  	  <h6 class="abtp_textdesign1">Clients</h6>
       	   	   	  	  	  </div>
       	   	   	  	  </div>
       	   	   	  	  <div class="col-lg-3 col-6">
       	   	   	  	  	  <div class="pointbox_outarea">
       	   	   	  	  	  	  <h1 class="abtnmbercnt_textdesign">
       	   	   	  	  	  	  	4.9
       	   	   	  	  	  	  	<span class="rtngstr_icondesign">
       	   	   	  	  	  	  	  <i class="fa-solid fa-star"></i>
       	   	   	  	  	  	  	</span>  
       	   	   	  	  	  	  </h1>
       	   	   	  	  	  	  <p class="cchimg_design1">
       	   	   	  	  	  	  	<img src="{{asset('public/website')}}/assets/images/clutch-c.png">
       	   	   	  	  	  	  	Clutch
       	   	   	  	  	  	  </p>
       	   	   	  	  	  </div>
       	   	   	  	  </div>
       	   	   	  	  <div class="col-lg-3 col-6">
       	   	   	  	  	  <div class="pointbox_outarea1">
       	   	   	  	  	  	  <h1 class="abtnmbercnt_textdesign">
       	   	   	  	  	  	  	4.8
       	   	   	  	  	  	  	<span class="rtngstr_icondesign">
       	   	   	  	  	  	  	  <i class="fa-solid fa-star"></i>
       	   	   	  	  	  	  	</span>  
       	   	   	  	  	  	  </h1>
       	   	   	  	  	  	  <p class="cchimg_design1">
       	   	   	  	  	  	  	<img src="{{asset('public/website')}}/assets/images/google-g.png">
       	   	   	  	  	  	  	Google Rating
       	   	   	  	  	  	  </p>
       	   	   	  	  	  </div>
       	   	   	  	  </div>
       	   	   	  </div>
                </div>
       	   	  </div>
       	  </div>
    </div>
   <!-- ==================================about us section==================================== -->

   <!-- ==================================our work ptocess section============================ -->
    <section class="outwork_pressoutsection">
      	 <div class="container prceswrk_area">
				   <div class="row">
				      <div class="col-lg-12 ourworkprocess_outsection">
				         <h6 class="hwwtext_design">How We Work</h6>
				         <h1 class="owprocess_textdesign">Our Works Process</h1>
				         <section class="text-center pos-r oxarea">
				            <div class="container">
				               <div class="row">
				                  <div id="svg-container">
				                     <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet">
				                        <desc>Created with Snap</desc>
				                        <defs></defs>
				                        <path d="M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1" id="squiggle" fill="none" stroke="rgba(0,0,0,0.1)" strokeMiterLimit="10" strokeDashOffset="180" style="stroke-width: 1; stroke-dasharray: 5, 10; stroke-dashoffset: 10;"></path>
				                        <g transform="matrix(0.2956,-0.9553,0.9553,0.2956,43.2367,24.8965)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g>
				                        <g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)">
				                           <polyline points="0, 30, 15, 0, 30, 30" id="plane" fill="rgba(0,0,0,0.05)" style=""></polyline>
				                        </g>
				                     </svg>
				                  </div>
				                  <div class="col-lg-4 col-md-12">
				                     <div class="work-process">
				                        <div class="box-loader"> <span></span>
				                           <span></span>
				                           <span></span>
				                        </div>
				                        <div class="step-num-box">
				                           <div class="step-icon"><span><i class="fa-solid fa-lightbulb process_icondesign"></i></span>
				                           </div>
				                           <div class="step-num">01</div>
				                        </div>
				                        <div class="step-desc">
				                           <h4>Create a Plan</h4>
				                           <p class="mb-0">There are many variation of passages of Lorem Ips available, but them.</p>
				                        </div>
				                     </div>
				                  </div>
				                  <div class="col-lg-4 col-md-12 md-mt-5">
				                     <div class="work-process">
				                        <div class="box-loader"> <span></span>
				                           <span></span>
				                           <span></span>
				                        </div>
				                        <div class="step-num-box">
				                           <div class="step-icon"><span><i class="fa-solid fa-code process_icondesign"></i></span>
				                           </div>
				                           <div class="step-num">02</div>
				                        </div>
				                        <div class="step-desc">
				                           <h4>Start Working</h4>
				                           <p class="mb-0">There are many variation of passages of Lorem Ips available, but them.</p>
				                        </div>
				                     </div>
				                  </div>
				                  <div class="col-lg-4 col-md-12 md-mt-5">
				                     <div class="work-process">
				                        <div class="step-num-box">
				                           <div class="step-icon"><span><i class="fa-solid fa-rocket process_icondesign"></i></span>
				                           </div>
				                           <div class="step-num">03</div>
				                        </div>
				                        <div class="step-desc">
				                           <h4>Publish Business</h4>
				                           <p class="mb-0">There are many variation of passages of Lorem Ips available, but them.</p>
				                        </div>
				                     </div>
				                  </div>
				               </div>
				            </div>
				         </section>
				      </div>
				   </div>
				</div>
    </section>
   <!-- ==================================our work ptocess section============================ -->

   <!-- ==============================discover devant difference section====================== -->
    <section class="ddfback_area">
      	<div class="boxhshape_imgoutarea">
      		<img src="{{asset('public/website')}}/assets/images/shape.png">
      	</div>
        <div class="container">
         	<div class="row">
         		  <div class="col-lg-10 offset-lg-1 ddsection_outarea">
         		  	  <h1 class="ddfrnc_textdesign">
         		  	   	  Discover the DEVANT difference
         		  	  </h1>
         		  	  	<div class="dkbox_outsection">
         		  	  	  	  	  <div class="fstltr_boldtextarea">
         		  	  	  	  	   	<h1 class="fstltr_bolftxt">A</h1>
         		  	  	  	  	  </div>
         		  	  	  	  	  <div class="dfrnciconbox_outarea">
         		  	  	  	  	  	  <img src="{{asset('public/website')}}/assets/images/ai-img.jpg" class="dfrncbox_imgdesign">
         		  	  	  	  	  </div>
         		  	  	  	  	  <span class="acld_textdesign">AI & CLOUD </span>
         		  	  	  	  	  <p class="ddfij_textdesign">
         		  	  	  	  	  	Discover Innovative AI Solutions - DEVANT brings cutting-edge artificial intelligence solutions to transform your business. 
         		  	  	  	  	  </p>
         		  	  	  	  	  <button class="dambtbn_outarea">
         		  	  	  	  	  	<a href="{{route('ai_cloud')}}">
         		  	  	  	  	  		Know More
         		  	  	  	  	  		<i class="fa-solid fa-arrow-right-long"></i>
         		  	  	  	  	  	</a>
         		  	  	  	  	  </button>
         		  	  	</div>
         		  	  	<div class="dkbox_outsection1">
         		  	  	  	  	  <div class="fstltr_boldtextarea">
         		  	  	  	  	   	<h1 class="fstltr_bolftxt">D</h1>
         		  	  	  	  	  </div>
         		  	  	  	  	  <div class="dfrnciconbox_outarea">
         		  	  	  	  	  	  <img src="{{asset('public/website')}}/assets/images/di-img.jpg" class="dfrncbox_imgdesign">
         		  	  	  	  	  </div>
         		  	  	  	  	  <span class="acld_textdesign">DIGITAL MARKETING</span>
         		  	  	  	  	  <p class="ddfij_textdesign">
         		  	  	  	  	  	Discover Innovative AI Solutions - DEVANT brings cutting-edge artificial intelligence solutions to transform your business. 
         		  	  	  	  	  </p>
         		  	  	  	  	  <button class="dambtbn_outarea">
         		  	  	  	  	  	<a href="{{route('cybersecurity')}}">
         		  	  	  	  	  		Know More
         		  	  	  	  	  		<i class="fa-solid fa-arrow-right-long"></i>
         		  	  	  	  	  	</a>
         		  	  	  	  	  </button>
         		  	  	</div>
         		  	  	<div class="dkbox_outsection">
         		  	  	  	  	  <div class="fstltr_boldtextarea">
         		  	  	  	  	   	<h1 class="fstltr_bolftxt">F</h1>
         		  	  	  	  	  </div>
         		  	  	  	  	  <div class="dfrnciconbox_outarea">
         		  	  	  	  	  	  <img src="{{asset('public/website')}}/assets/images/fi-work.jpg" class="dfrncbox_imgdesign">
         		  	  	  	  	  </div>
         		  	  	  	  	  <span class="acld_textdesign">FUTURE OF WORK</span>
         		  	  	  	  	  <p class="ddfij_textdesign">
         		  	  	  	  	  	Discover Innovative AI Solutions - DEVANT brings cutting-edge artificial intelligence solutions to transform your business. 
         		  	  	  	  	  </p>
         		  	  	  	  	  <button class="dambtbn_outarea">
         		  	  	  	  	  	<a href="{{route('future_of_work')}}">
         		  	  	  	  	  		Know More
         		  	  	  	  	  		<i class="fa-solid fa-arrow-right-long"></i>
         		  	  	  	  	  	</a>
         		  	  	  	  	  </button>
         		  	  	</div>
         		  	  	<div class="dkbox_outsection1">
         		  	  	  	  	  <div class="fstltr_boldtextarea">
         		  	  	  	  	   	<h1 class="fstltr_bolftxt">B</h1>
         		  	  	  	  	  </div>
         		  	  	  	  	  <div class="dfrnciconbox_outarea">
         		  	  	  	  	  	  <img src="{{asset('public/website')}}/assets/images/bchain-img.jpg" class="dfrncbox_imgdesign">
         		  	  	  	  	  </div>
         		  	  	  	  	  <span class="acld_textdesign">BLOCKCHAIN</span>
         		  	  	  	  	  <p class="ddfij_textdesign">
         		  	  	  	  	  	Discover Innovative AI Solutions - DEVANT brings cutting-edge artificial intelligence solutions to transform your business. 
         		  	  	  	  	  </p>
         		  	  	  	  	  <button class="dambtbn_outarea">
         		  	  	  	  	  	<a href="{{route('blockchain')}}">
         		  	  	  	  	  		Know More
         		  	  	  	  	  		<i class="fa-solid fa-arrow-right-long"></i>
         		  	  	  	  	  	</a>
         		  	  	  	  	  </button>
         		  	  	</div>
         		  </div>
         	</div>
        </div>
    </section>
   <!-- ==============================discover devant difference section====================== -->

   <!-- ==============================company service section================================= -->
    <section class="cmpnyservice_outsection">
        	  <div class="container">
        	  	  <div class="row">
        	  	  	  <div class="col-lg-12 innerservice_outsection">
        	  	  	  	  <div class="row">
        	  	  	  	   	  <div class="col-lg-6">
        	  	  	  	   	    	<div class="leftallsrvc_mainarea">
        	  	  	  	   	    	  <h1 class="swdtext_design">Solutions we deliver</h1>
        	  	  	  	   	    	  <p class="swdtext_design1">
        	  	  	  	   	    	  	We Work Performed For Client Happy.
        	  	  	  	   	    	  </p>
        	  	  	  	   	    	</div>
        	  	  	  	   	  </div>
        	  	  	  	   	  <div class="col-lg-6">
        	  	  	  	   	    	<div class="rightallsrvc_mainarea">
        	  	  	  	   	    	  <button class="lwrbtn_design">
										               <a href="{{route('contact_us')}}" class="lwtxd_btntextdesign">
        	  	  	  	   	    	  	  Let’s Work Together
        	  	  	  	   	    	  	  <i class="fa-solid fa-arrow-right-long klwbtn_icondesign"></i>
									                  </a>
        	  	  	  	   	    	  </button>
        	  	  	  	   	    	</div>
        	  	  	  	   	  </div>
        	  	  	  	  </div>
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
                                      	<a href="{{route('web_developmentservice')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
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
                                      	<a href="{{route('mobile_appdevelopmentservice')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
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
                                      	<a href="{{route('custom_website')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
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
                                      	<p>Video animation refers to the process of creating moving images, typically using a sequence of still images.</p>
                                      	<a href="{{route('video_animationservice')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
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
                                      	<a href="{{route('digital_marketingservice')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
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
                                      	<a href="{{route('graphice_designservice')}}">read more<i><img src="{{asset('public/website')}}/assets/images/arrow-circle.png" alt=""></i></a>
                                      </div>
                        	  	  </div>
                        	  </div>
                        </div>
        	  	  	  </div>
        	  	  </div>
        	  </div>
    </section>
   <!-- ==============================company service section================================= -->

   <!-- ==============================solution for every industry============================= -->
    <section class="sfein_outsection">
         	    <div class="boxhshape_imgoutarea">
      		        <img src="{{asset('public/website')}}/assets/images/shape.png">
      	      </div>
      	      <div class="container">
      	      	  <div class="row">
      	      	  	<div class="col-lg-12 oisfei_mainoutsection">
	      	      	  	  <h1 class="sofitext_indesign">
	      	      	  	  	  <span class="snsfct_textdesign">
	         		  	   	         Solutions 
	         		  	   	      </span>
	         		  	   	      for every industry
	         		  	      </h1>
      	      	  	</div>
      	      	  </div>
                  <div class="row">
                  	  <div class="col-lg-3">
                  	   	  <div class="solutionthree_stepoutsection">
                  	   	  	  <div class="row">
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-ecommerce.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Ecommerce</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-travel.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Travel</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-realestate.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Real Estate</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  </div>
                  	   	  </div>
                  	  </div>
                  	  <div class="col-lg-6">
                  	  	  <div class="solutionthree_stepoutsection2">
                  	  	  	  <img src="{{asset('public/website')}}/assets/images/hero-1-img.png" class="slutnmdl_imgdesign">
                  	  	  </div>
                  	  </div>
                  	  <div class="col-lg-3">
                  	   	  <div class="solutionthree_stepoutsection">
                  	   	  	  <div class="row">
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-medical.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Medical</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-logistics.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Logistics</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  	 <div class="col-lg-12">
                  	   	  	  	 	  <div class="sboutbox_outarea">
                  	   	  	  	 	  		<img src="{{asset('public/website')}}/assets/images/industry-education.jpg" class="ieimg_design">
                  	   	  	  	 	  		<div class="clrbnck_design"></div>
                  	   	  	  	 	  		<h2 class="excetext_design">Education</h2>
                  	   	  	  	 	  </div>
                  	   	  	  	 </div>
                  	   	  	  </div>
                  	   	  </div>
                  	  </div>
                  </div>
      	      </div>
    </section>
   <!-- ==============================solution for every industry============================= -->

   <!-- ==============================technology area========================================= -->
   <!-- <div class="container-fluid">
   	   <div class="row">
   	   	   <div class="col-lg-12 oltcngly_outsection">
   	   	   	    <div class="row">
   	   	   	    	  <div class="col-lg-5 lefttechno_loutsection">
   	   	   	    	  	  <img src="{{asset('public/website')}}/assets/images/technology-background.png" class="klgyimg_design">
   	   	   	    	  </div>
   	   	   	    	  <div class="col-lg-7 righttechno_loutsection">
   	   	   	    	  	  <h2 class="wust_textdesign">We use technology that is built to last</h2>
   	   	   	    	  	  <p class="weetx_edesign">
   	   	   	    	  	  	Whether it’s one person or an entire team, we have a range of experts who can build your digital software solution right.
   	   	   	    	  	  </p>
   	   	   	    	  	  <div class="marque_tchoutarea">
   	   	   	    	  	  	  <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" class="mdsq_design">
                            	  <ul class="drctmarq_outarea">
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-1.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-2.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-3.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-4.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-5.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-6.png">
	                            	 	</li>
                            	  </ul>
                            </marquee>
                            <marquee behavior="scroll" direction="down" onmouseover="this.stop();" onmouseout="this.start();" class="mdsq_design">
                            	  <ul class="drctmarq_outarea">
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-7.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-8.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-9.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-10.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-11.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-12.png">
	                            	 	</li>
                            	  </ul>
                            </marquee>
                            <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" class="mdsq_design">
                            	  <ul class="drctmarq_outarea">
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-13.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-14.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-15.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-16.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-17.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-18.png">
	                            	 	</li>
                            	  </ul>
                            </marquee>
                            <marquee behavior="scroll" direction="down" onmouseover="this.stop();" onmouseout="this.start();" class="mdsq_design">
                            	  <ul class="drctmarq_outarea">
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-19.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-20.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-21.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-22.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-23.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-24.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-25.png">
	                            	 	</li>
	                            	 	<li>
	                            	 	 	<img src="{{asset('public/website')}}/assets/images/technology-26.png">
	                            	 	</li>
                            	  </ul>
                            </marquee>
   	   	   	    	  	  </div>
   	   	   	    	  </div>
   	   	   	    </div>
   	   	   </div>
   	   </div>
   </div> -->
   <div class="container-fluid tdfs_outsection">
   <div class="row">
      <div class="col-lg-12 kslogy_outsection">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 tdlopment_outsection">
                  <h1 class="tlent_kstextdesign">Technology & Development Stacks</h1>
                  <p class="kts_msyptextdesign">
                     We Are An Expert Software Development Company And Use The Best Technologies And Platforms To Deliver High-Quality Products.
                  </p>
                  <div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-flip sky-tabs-response-to-icons">
                     <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
                     <label for="sky-tab1">
                     <span>
                     <span>
                     <img src="{{asset('public/website')}}/assets/images/code.png" class="ikimg_tabdesign">
                     CMS
                     </span>
                     </span>
                     </label>
                     <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
                     <label for="sky-tab2">
                     <span>
                     <span>
                     <img src="{{asset('public/website')}}/assets/images/app-development.png" class="ikimg_tabdesign">
                     MOBILE
                     </span>
                     </span>
                     </label>
                     <input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
                     <label for="sky-tab3">
                     <span>
                     <span>
                     <img src="{{asset('public/website')}}/assets/images/user-experience.png" class="ikimg_tabdesign">
                     FRONTEND
                     </span>
                     </span>
                     </label>
                     <input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
                     <label for="sky-tab4">
                     <span>
                     <span>
                     <img src="{{asset('public/website')}}/assets/images/backend.png" class="ikimg_tabdesign">
                     BACKEND
                     </span>
                     </span>
                     </label>
                     <label class="switcher"><span><span><a href="#"><i class="icon-reorder"></i>Tabs</a></span></span></label>
                     <ul>
                        <li class="sky-tab-content-1">
                           <ul class="tabs_incomarea">
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-1.png">
                                 <h2>Sitecore</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-2.png">
                                 <h2>Joomla</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-3.png">
                                 <h2>Prestashop</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-4.png">
                                 <h2>Ubercart</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-5.png">
                                 <h2>CS cart</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-6.png">
                                 <h2>Wordpress</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-7.png">
                                 <h2>Magento</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-8.png">
                                 <h2>Drupal</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/cms-9.png">
                                 <h2>BigCommerce</h2>
                              </li>
                           </ul>
                        </li>
                        <li class="sky-tab-content-2">
                           <ul class="tabs_incomarea">
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-1.png">
                                 <h2>Android</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-2.png">
                                 <h2>iOS</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-3.png">
                                 <h2>React Native</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-4.png">
                                 <h2>Ionic</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-5.png">
                                 <h2>Flutter</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-2.png">
                                 <h2>iOS</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-3.png">
                                 <h2>React Native</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-4.png">
                                 <h2>Ionic</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-1.png">
                                 <h2>Android</h2>
                              </li>
                           </ul>
                        </li>
                        <li class="sky-tab-content-3">
                           <ul class="tabs_incomarea">
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-1.png">
                                 <h2>Angular</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-3.png">
                                 <h2>React</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-3.png">
                                 <h2>Javascript</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-4.png">
                                 <h2>Typescript</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-5.png">
                                 <h2>Sencha Touch</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-6.png">
                                 <h2>Bootstrap</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-7.png">
                                 <h2>Css</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/frontend-8.png">
                                 <h2>Jquery</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/mobile-3.png">
                                 <h2>React</h2>
                              </li>
                           </ul>
                        </li>
                        <li class="sky-tab-content-4">
                           <ul class="tabs_incomarea">
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-1.png">
                                 <h2>Cake PHP</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-2.png">
                                 <h2>Codeigniter</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-3.png">
                                 <h2>Laravel</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-4.png">
                                 <h2>PHP</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-5.png">
                                 <h2>Python</h2>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-2.png">
                                 <h2>Codeigniter</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-4.png">
                                 <h2>PHP</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-1.png">
                                 <h2>Cake PHP</h2>
                              </li>
                              </li>
                              <li>
                                 <img src="{{asset('public/website')}}/assets/images/backend-3.png">
                                 <h2>Laravel</h2>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <img src="{{asset('public/website')}}/assets/images/boy.png" class="codegirl_imgdesign">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- ==============================technology area========================================= -->

   <!-- ==============================recognition section===================================== -->
   <div class="container">
   	  <div class="row">
   	   	  <div class="col-lg-12 recogmain_outsection">
   	   	    	<h1 class="ogrec_textdesign">Our Global Recognition</h1>
   	   	    	<div class="carousel-wrap">
									  <div class="owl-carousel">
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/76713?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Appsmith Company Canada 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/99345?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Appsmith Company Toronto 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe  class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/106031?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Adalo Company Toronto 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/99246?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Quixy Development Toronto 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/34444?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Kintone Development Toronto 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/102326?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Crm Consulting Company Oshawa 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/75763?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Microsoft Dynamics Crm Company Markham 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/42724?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Php Developers Oshawa 2024"></iframe>
									    </div>
									    <div class="item">
									    	<iframe  class="worgtn_imgdesign" src="https://shareables.clutch.co/share/badges/2350904/2220?utm_source=clutch_top_company_badge&utm_medium=image_embed" title="Top Clutch Social Media Marketing Company Oshawa 2024"></iframe>
									    </div>
									  </div>
            </div>
   	   	  </div>
   	  </div>
   </div>
   <!-- ==============================recognition section===================================== -->

   <!-- ==============================our blog section======================================== -->
    <section class="oblse_outback">
     <div class="container">
     	  <div class="row">
     	   	  <div class="col-lg-12 lourblog_mainoutsection">
     	   	  	  <h2 class="oblog_fsthdngtext">OUR BLOG</h2>
     	   	  	  <div class="row">
     	   	  	  	  <div class="col-lg-6">
     	   	  	  	  	  <div class="hdngfst_leftoutarea">
     	   	  	  	  	  	  <h1 class="rdltstnws_text">
     	   	  	  	  	  	  	<span class="rdltstnws_text1">
     	   	  	  	  	  	  	  Read Latest 
     	   	  	  	  	  	  	</span>  
     	   	  	  	  	  	  	News
     	   	  	  	  	  	  </h1>
     	   	  	  	  	  </div>
     	   	  	  	  </div>
     	   	  	  	  <div class="col-lg-6">
     	   	  	  	  	  <div class="hdngfst_rightoutarea">
     	   	  	  	  	  	  <button class="lwrbtn_design1">
     	   	  	  	  	  	  	<a href="{{route('blog_list')}}" class="lwtxd_btntextdesign">
        	  	  	  	   	    	Browse Our Blogs
        	  	  	  	   	    	<i class="fa-solid fa-arrow-right-long klwbtn_icondesign1"></i>
        	  	  	  	   	    </a>	
        	  	  	  	   	  </button>
     	   	  	  	  	  </div>
     	   	  	  	  </div>
     	   	  	  </div>
     	   	  	  <div class="row">
					@if(isset($blogs))
            	    @foreach($blogs as $list)
                    @php
                    $blogData = json_decode($list->image);
                    $blogimage = isset($blogData[0]->download_link) ? $blogData[0]->download_link : '';
                    @endphp
     	   	  	  	  <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{ asset('storage/app/public/'.$blogimage) }}" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">{{@$list->blog_type}}</a>
     	   	  	  	  	  	   	  		  <!-- <a href="#" class="tagline_blogdesign">Design</a> -->
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	{{@$list->title}}
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  <img src="{{asset('public/website')}}/assets/images/blog-man.png" class="ikmusee_imgdesign">
										  Published By: {{@$list->published_by}}
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	{{@$list->published_at->format('d/m/Y')}}
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="{{route('blog_details')}}/{{@$list->id}}">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div>
					@endforeach
                    @endif
     	   	  	  	 </div>
     	   	  </div>
     	  </div>
     </div>
    </section> 
   <!-- ==============================our blog section======================================== -->
  
   <!-- ==============================our clients section===================================== -->
    <section class="ccltn_outarea">
      <div class="container">
        <div class="row">
         	  	<div class="col-lg-12 trustedclient_outsection">
         	  	  	<h1 class="ovcclnt_textdesign">
         	  	  		Our 
         	  	  		<span class="ovcetexr_design">Valuable</span> 
         	  	  		Clients
         	  	  	</h1>
         	  	  	<!-- <ul class="trustclient_outarea">
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-1.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-2.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-5.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-3.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-4.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-7.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-9.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-10.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_innerborder trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-8.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  		<li class="trustclient_innerarea trustclient_oinnerarea">
         	  	  			<img src="{{asset('public/website')}}/assets/images/client-6.png" class="trust_clyntimgdesign">
         	  	  		</li>
         	  	  	</ul> -->
         	  	  	<div class="owl-carousel trustclient_outarea1">
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-1.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-2.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-5.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-3.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-4.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-7.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-9.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-10.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-8.png" class="clientowl_imgdesign">
									    </div>
									    <div class="item">
									    	<img src="{{asset('public/website')}}/assets/images/client-6.png" class="clientowl_imgdesign">
									    </div>
									  </div>
         	  	</div>
        </div>
      </div>
    </section>  
   <!-- ==============================our clients section===================================== -->

   <!-- ==============================footer section========================================== -->
    <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection