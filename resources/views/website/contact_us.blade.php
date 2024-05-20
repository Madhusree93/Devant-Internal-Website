@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')

   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 obreadcum_outsection">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 REACH US
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Contact us</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
	  @if($errors->any())
	  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>{{$errors->first()}}</strong> 
</div>
  @endif
	 
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ==================================contactus area section================================ -->
      <!-- <section class="contactbck_outarea">
        <div class="container">
        	<div class="row">
        		 <div class="col-lg-12 contactout_section">
        		 	    <div class="row">
        		 	    	  <div class="col-lg-6">
        		 	    	  	  <div class="leftindiamap_outarea">
                              <div class="pin1 toltxip2">
                                  <div class="toptiptxtds2">
                                    <h2 class="areanametext">Kolkata Office</h2>
                                  <div class="adress_boxarea">
                                      <h2 class="boxmap_textdesign">
                                          <i class="fas fa-map-marker boxmap_icondesign"></i>
                                            7/9 Poddar Nagar 1st floor, Near South City, Kolkata 700068, Land Mark - Poddar Nagar High School
                                      </h2>
                                      <h2 class="boxmap_textdesign">
                                          <i class="fas fa-phone-volume boxmap_icondesign"></i>
                                          <a href="tel:(+033) 4065 8041" class="phnnumber_textdesign">
                                                (+033) 4065 8041
                                          </a>
                                      </h2>
                                  </div>
                                    <a href="#" class="mapviewarea">
                                        View Map
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                  </div>
                              </div>
        		 	    	  	  </div>
        		 	    	  </div>
        		 	    	  <div class="col-lg-6">
        		 	    	  	  <div class="canadamap_outsection">
                              <div class="pin4 toltxip5">
																   <div class="toptiptxtds5">
																      <h2 class="areanametext">Canada Office</h2>
																      <div class="adress_boxarea">
																         <h2 class="boxmap_textdesign">
																            <i class="fas fa-map-marker boxmap_icondesign"></i>
																            23 Cooperage Lane, Ajax, Ontario, Canada, L1S 0E8
																         </h2>
																         <h2 class="boxmap_textdesign">
																            <i class="fas fa-phone-volume boxmap_icondesign"></i>
																            <a href="tel:+14374991573" class="phnnumber_textdesign">
																            +14374991573
																            </a>
																         </h2>
																      </div>
																      <a href="#" class="mapviewarea">
																      View Map
																      <i class="fas fa-arrow-right"></i>
																      </a>
																   </div>
                              </div>
        		 	    	  	  </div>
        		 	    	  </div>
        		 	    </div>
        		 	    <div class="row">
        		 	    	<h2 class="ogloc_textcen">Our Global Locations</h2>
        		 	    	<div class="col-lg-6">
        		 	    	 	<div class="fleft_oadressoutsection">
        		 	    	 	  <div class="row">
        		 	    	 	   	  <div class="col-lg-2">
        		 	    	 	   	   	  <div class="flgimg_outarea">
        		 	    	 	   	   	  	  <img src="images/india-flags.png" class="kiimg_design">
        		 	    	 	   	   	  </div>
        		 	    	 	   	  </div>	
        		 	    	 	   	  <div class="col-lg-10">
        		 	    	 	   	   	  <div class="flgcontent_outarea">
        		 	    	 	   	   	  	  <ul class="dcontact_otarea">
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-location-dot"></i>
        		 	    	 	   	   	  	  	  <span>7/9 Poddar Nagar 1st floor, Near South City, Kolkata 700068, Land Mark - Poddar Nagar High School</span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-envelope"></i>
        		 	    	 	   	   	  	  	  <span>
        		 	    	 	   	   	  	  	  	<a href="mailto:info@devantitsolutions.com">
        		 	    	 	   	   	  	  	  	   info@devantitsolutions.com
        		 	    	 	   	   	  	  	  	</a>
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-phone"></i>
        		 	    	 	   	   	  	  	  <span>
        		 	    	 	   	   	  	  	  	<a href="tel:(+033) 4065 8041">
        		 	    	 	   	   	  	  	  	  Land Number: (+033) 4065 8041
        		 	    	 	   	   	  	  	  	</a>
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-mobile"></i>
        		 	    	 	   	   	  	  	  <span>
        		 	    	 	   	   	  	  	  	<a href="tel: (+91) 7605083837, (+91) 8100350005">
                                            Mobile: (+91) 7605083837, (+91) 8100350005
                                          </a>
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-headphones"></i>
        		 	    	 	   	   	  	  	  <span>
                                          <a href="tel: (+91) 76050 83834">
                                            HR Department: (+91) 76050 83834
                                          </a> 
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  </ul>
        		 	    	 	   	   	  </div>
        		 	    	 	   	  </div>
        		 	    	 	  </div>
        		 	    	 	  <div class="row">
        		 	    	 	   	  <div class="col-lg-2">
        		 	    	 	   	   	  <div class="flgimg_outarea">
        		 	    	 	   	   	  	  <img src="images/canadas.png" class="kiimg_design">
        		 	    	 	   	   	  </div>
        		 	    	 	   	  </div>	
        		 	    	 	   	  <div class="col-lg-10">
        		 	    	 	   	   	  <div class="flgcontent_outarea">
        		 	    	 	   	   	  	  <ul class="dcontact_otarea">
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-location-dot"></i>
        		 	    	 	   	   	  	  	  <span>23 Cooperage Lane, Ajax, Ontario, Canada, L1S 0E8</span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-envelope"></i>
        		 	    	 	   	   	  	  	  <span>
        		 	    	 	   	   	  	  	  	<a href="mailto:info@devantglobal.com">
        		 	    	 	   	   	  	  	  	    info@devantglobal.com
        		 	    	 	   	   	  	  	  	</a>
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  	<li>
        		 	    	 	   	   	  	  	  <i class="fa-solid fa-phone"></i>
        		 	    	 	   	   	  	  	  <span>
        		 	    	 	   	   	  	  	  	<a href="tel:+14374991573">
        		 	    	 	   	   	  	  	  	  Land Number: +14374991573
        		 	    	 	   	   	  	  	  	</a>
        		 	    	 	   	   	  	  	  </span>
        		 	    	 	   	   	  	  	</li>
        		 	    	 	   	   	  	  </ul>
        		 	    	 	   	   	  </div>
        		 	    	 	   	  </div>
        		 	    	 	  </div>
        		 	    	 	</div>
        		 	    	</div>
        		 	    	<div class="col-lg-6">
        		 	    		<div class="fright_contactformoutarea">
        		 	    			  <form class="form">
        		 	    			  	<div class="row">
        		 	    			  		<div class="col-lg-6">
														   <div class="form-item">
														      <input type="text" id="name" autocomplete="off" required="">
														      <label for="name">YOUR NAME*</label>
														   </div>
													    </div>
													    <div class="col-lg-6">
															  <div class="form-item">
															      <input type="email" id="ycemail" autocomplete="off" required="">
															      <label for="ycemail">YOUR EMAIL*</label>
															  </div>
														  </div>
													  </div> 
													  <div class="row">
													    <div class="col-lg-6">
														   <div class="form-item">
														      <input type="text" id="cnumber" autocomplete="off" required="">
														      <label for="cnumber">YOUR PHONE NO*</label>
														   </div>
														  </div>	 
														  <div class="col-lg-6">
															  <div class="form-item">
															        <select name="cars" id="cars">
		  																		<option value="-Select Your Requirement-">-Select Your Requirement-</option>
		  																		<option value="Graphics Design">Graphics Design</option>
		  																		<option value="Mobile App Development">Mobile App Development</option>
		  																		<option value="Web Development">Web Development</option>
		  																		<option value="Digital Marketing">Digital Marketing</option>
		  																		<option value="Other Services">Other Services</option>
		                                  </select>
															  </div>
														  </div>
													  </div> 
													  <div class="row">
													  	<div class="col-lg-12">
														    <div class="form-item">
														      <input type="text" id="ymessage" autocomplete="off" required="" class="olfxcz_pox">
														      <label for="ymessage">YOUR MESSAGE</label>
														    </div>
													    </div>
													  </div>
                             <div>
														  <div class="buttons_ocbtnarea">
														         <button class="blob-btn">
														         SEND MESSAGE
														         <span class="blob-btn__inner">
														         <span class="blob-btn__blobs">
														         <span class="blob-btn__blob"></span>
														         <span class="blob-btn__blob"></span>
														         <span class="blob-btn__blob"></span>
														         <span class="blob-btn__blob"></span>
														         </span>
														         </span>
														         </button>
														         <br>
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
                             </div>
                          </form>
        		 	    		</div>
        		 	    	</div>
        		 	    </div>
        		 </div>
        	</div>
        </div>
      </section> -->    
      <section  class="page-section pb-100 pb-sm-60 bg-gray-light-1 bg-light-alpha-90 parallax-5" style="background-image: url(&quot;images/contact-background.jpg&quot;);background-position: 50% 0px;">
	          <div class="container">
	          	<div class="row">
	          	  <div class="col-lg-12 fstcontact_outsection">
	          	  	  <h4 class="laxc_textdesign">
	          	  	  	LOOK AROUND YOU EVERYTHING IS CHANGING.
	          	  	  </h4>	
	          	  	  <p class="witxy_ptextdesign">
	          	  	  	What if the time has come for you to change? Starting a collaboration is easy! Order a free consultation or call back. We are always in touch and happy to cooperate with you
	          	  	  </p>
	          	  </div>
	          	</div>
	          </div>
	          <div class="container">
	          	 <div class="row">
	          	 	  <div class="col-lg-6 hboxfstleft_outsection">
	          	 	  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.5332285022214!2d88.36286757435094!3d22.501167435586385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271aade5fc2cb%3A0x5d499db270f261d1!2sDevant%20IT%20Solutions%20Pvt.%20Ltd.!5e1!3m2!1sen!2sin!4v1715695079053!5m2!1sen!2sin" class="icmap_design" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	          	 	  </div>
	          	 	  <div class="col-lg-6 hboxfstright_outsection">
	          	 	  	<ul class="dcontact_otarea">
        		 	    	 	  <li>
        		 	    	 	   	<i class="fa-solid fa-location-dot"></i>
        		 	    	 	   	<span>7/9 Poddar Nagar 1st floor, Near South City, Kolkata 700068, Land Mark - Poddar Nagar High School</span>
        		 	    	 	  </li>
        		 	    	 	  <li>
        		 	    	 	   	<i class="fa-solid fa-envelope"></i>
        		 	    	 	   	<span>
        		 	    	 	   	   	<a href="mailto:info@devantitsolutions.com">
        		 	    	 	   	   	  info@devantitsolutions.com
        		 	    	 	   	    </a>
        		 	    	 	   	</span>
        		 	    	 	  </li>
        		 	    	 	  <li>
        		 	    	 	   	  <i class="fa-solid fa-phone"></i>
        		 	    	 	   	  <span>
        		 	    	 	   	   	<a href="tel:(+033) 4065 8041">
        		 	    	 	   	   	  Land Number: (+033) 4065 8041
        		 	    	 	   	   	</a>
        		 	    	 	   	  </span>
        		 	    	 	  </li>
        		 	    	 	  <li>
        		 	    	 	   	<i class="fa-solid fa-mobile"></i>
        		 	    	 	   	<span>
        		 	    	 	   	   	<a href="tel: (+91) 7605083837, (+91) 8100350005">
                                Mobile: (+91) 7605083837, (+91) 8100350005
                              </a>
        		 	    	 	   	</span>
        		 	    	 	  </li>
        		 	    	 	</ul>
	          	 	  </div>
	          	 	  <div class="col-lg-6 hboxfstright_outsection1">
	          	 	  	<ul class="dcontact_otarea1">
        		 	    	 	  <li>
        		 	    	 	   	<i class="fa-solid fa-location-dot"></i>
        		 	    	 	   	<span>23 Cooperage Lane, Ajax, Ontario, Canada, L1S 0E8</span>
        		 	    	 	  </li>
        		 	    	 	  <li>
        		 	    	 	   	<i class="fa-solid fa-envelope"></i>
        		 	    	 	   	<span>
        		 	    	 	   	   	<a href="mailto:info@devantglobal.com">
        		 	    	 	   	   	  info@devantglobal.com
        		 	    	 	   	    </a>
        		 	    	 	   	</span>
        		 	    	 	  </li>
        		 	    	 	  <li>
        		 	    	 	   	  <i class="fa-solid fa-phone"></i>
        		 	    	 	   	  <span>
        		 	    	 	   	   	<a href="tel:+14374991573">
        		 	    	 	   	   	  Land Number: +14374991573
        		 	    	 	   	   	</a>
        		 	    	 	   	  </span>
        		 	    	 	  </li>
        		 	    	 	</ul>
	          	 	  </div>
	          	 	  <div class="col-lg-6 hboxfstleft_outsection1">
	          	 	  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2401.141833813822!2d-79.01697532464685!3d43.858417739135064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4e008da942ff7%3A0xfc5c6e8c3d12a4e3!2s23%20Cooperage%20Ln%2C%20Ajax%2C%20ON%20L1S%205C3%2C%20Canada!5e1!3m2!1sen!2sin!4v1715696259029!5m2!1sen!2sin"   class="icmap_design" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	          	 	  </div>
	          	 </div>
	          </div>
	          <div class="container-fluid">
	          	<div class="row">
	          		<div class="col-lg-12 fcontactform_backsection">
	          			<img src="images/layer-2-light.png" class="kgraph_back">
		              <div class="container">
		          	    <div class="row">
		          		  <div class="col-lg-12">
		          		  	<div class="gform_outsection">
		          		  		<h1 class="gitotext_ctdfesign">Get In Touch</h1>
		          		  		<form class="form" method="post" action="{{route('save_contact_us')}}">
                                    @csrf
												  <div class="row">
												      <div class="col-lg-6">
												         <div class="form-item1">
												            <input type="text" name="name" id="name" autocomplete="off" value="{{old('name')}}" required>
												            <label for="name">YOUR NAME*</label>
												         </div>
												      </div>
												      <div class="col-lg-6">
												         <div class="form-item1">
												            <input type="email" name="email" id="ycemail" autocomplete="off" value="{{old('email')}}" required>
												            <label for="ycemail">YOUR EMAIL*</label>
												         </div>
												      </div>
												  </div>
											    <div class="row">
											      <div class="col-lg-12">
											         <div class="form-item1">
											            <input type="text" name="phone" id="cnumber" pattern="[7-9]{1}[0-9]{9}" autocomplete="off" title="Phone number with 7-9 and remaing 9 digit with 0-9" required value="{{old('phone')}}">
											            <label for="cnumber">YOUR PHONE NO*</label>
											         </div>
											      </div>
											    </div>
											    <div class="row">
											      <div class="col-lg-12">
											         <div class="form-item1">
											            <input type="text" name="message" id="ymessage" autocomplete="off" required value="{{old('message')}}" class="olfxcz_pox">
											            <label for="ymessage">YOUR MESSAGE</label>
											         </div>
											      </div>
											    </div>
												<div class="row">
											      <div class="col-lg-12">
											         <div class="form-item1">
													 {!!captcha_img('math')!!} <input type="text" name="captcha1" required>
													 @if($errors->has('captcha1'))
            										<span class="text-danger">
                									<strong>{{$errors->first('captcha1')}}</strong>
           											 </span>
            										@endif
											         </div>
											      </div>
											    </div>
												 <div class="buttons_ocbtnarea">
												    <button class="blob-btn">
												    SEND MESSAGE
												    <span class="blob-btn__inner">
												    <span class="blob-btn__blobs">
												    <span class="blob-btn__blob"></span>
												    <span class="blob-btn__blob"></span>
												    <span class="blob-btn__blob"></span>
												    <span class="blob-btn__blob"></span>
												    </span>
												    </span>
												    </button>
												    <br>
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
	                      </form>
		          		  	</div>
		          		  </div>
		          	    </div>
		              </div>
	              </div>
	            </div>
	          </div>
      </section>
   <!-- ==================================contactus area section================================ -->  

   <!-- ==============================footer section========================================== -->
   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection