@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 brochuredesign_breadcumsection">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 BROCHURE DESIGNING
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Brochure Designing</li>
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
	       	   	  		  		  	BROCHURE DESIGNING
	       	   	  		  		  </h1>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Brochures are a representation of an enterprise with a declaration of objectives, ideals and principles of the enterprise in an appealing way. It is an intricate way of presentation of the magnanimity of the brand to integrate someone into the particular brand.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	We at Devant IT Solutions aspire to make brochures as an adequate and effective representative of our clients’ brand. Our brochure designs are characterized as an ensemble of an attractive layout with effective delivery of the enterprise’s message according to the perceived needs of the target audience.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	The placement of contents alongside other aspects of designs such as {{asset('public/website')}}/assets/images, headers, icons etc are discussed in detail with clients giving utmost priority to delivery of a product tailor-made to suit the preferences of clientele.
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
