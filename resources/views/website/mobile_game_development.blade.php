@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 androidappdevelopmemnt_breadcumsection">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 ANDROID APP DEVELOPMENT
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>ANDROID APP DEVELOPMENT</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- =============================android app development area section====================== --> 
      <section class="androidapp_obackoutsection">
	        <div class="container">
	          <div class="row">
	          	 	<div class="col-lg-12 androidapp_moutsection">
	          	 		  <div class="row">
	          	 		  	  <div class="col-lg-6">
	          	 		  	  	 <div class="leftandroidimg_outarea">
	          	 		  	  	 	  <img src="{{asset('public/website')}}/assets/images/app-developmentexample1.jpg" class="scxndelcs_imgdesign">
	          	 		  	  	 </div>
	          	 		  	  </div>
	          	 		  	  <div class="col-lg-6">
	          	 		  	  	<div class="rightandroing_outarea">
	          	 		  	  		<h1 class="srvcpge_hdngtextdesign1">
	       	   	  		  		  	ANDROID APP DEVELOPMENT
	       	   	  		  		  </h1>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development refers to the process of creating software applications specifically for devices that run on the Android operating system. Android is a mobile operating system developed by Google, and it powers a wide range of devices, including smartphones, tablets, smartwatches, and smart TVs.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development involves several stages, including conceptualization, design, coding, testing, and deployment. Developers use programming languages such as Java, Kotlin, or C++ along with development tools like Android Studio to create Android apps.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development offers developers a vast and diverse ecosystem to create innovative and engaging mobile applications that cater to the needs and preferences of millions of users worldwide.
	       	   	  		  		  </p>
	          	 		  	  	</div>
	          	 		  	  </div>
	          	 		  </div>
	          	 		  <div class="row">
	       	   	  		  <div class="col-lg-12 projectshowcase_moutsection">
	       	   	  		  	  <h1 class="srvcpge_hdngtextdesign">
	       	   	  		  		  PROJECT GALLERY
	       	   	  		  		</h1>
	       	   	  		  		<figure class="snip1206">
													  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample74.jpg" alt="sample74"/>
													  <figcaption>
													    <h2>Jason Response</h2>
													    <p>Just makes people try to do everything at once.</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206 hover">
													  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample69.jpg" alt="sample69"/>
													  <figcaption>
													    <h2>Fleece Marigold</h2>
													    <p>We'd invent machines that do things less efficiently.</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206">
													  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample13.jpg" alt="sample13"/>
													  <figcaption>
													    <h2>Ruby Von Rails</h2>
													    <p>To the machines and go play outside.</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
	       	   	  		  </div>
	       	   	  	</div>
	          	 	</div>
	          </div>
	        </div>
      </section> 
   <!-- =============================android app development area section======================= -->

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection


