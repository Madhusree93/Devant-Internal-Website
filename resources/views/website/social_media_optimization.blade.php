@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 socialmediamarketing_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 SOCIAL MEDIA MARKETING
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Social Media Marketing</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ==============================social media marketing area section====================== --> 
      <section class="vcms_bckoutarea">
	       <div class="container">
	       	  <div class="row">
	       	   	<div class="col-lg-12 cmsmanagement_outsection">
	       	   	  	<div class="row">
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	 <div class="cmsleft_outsection">
	       	   	  		  	 	  <img src="{{asset('public/website')}}/assets/images/ellipse-2.png" class="lyupimg_design">
	       	   	  		  	 	  <img src="{{asset('public/website')}}/assets/images/socialmedia-marketingpg.jpg" class="lyupimg_design1">
	       	   	  		  	 </div>
	       	   	  		  </div>
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	<div class="cmsright_outsection">
	       	   	  		  		  <h1 class="srvcpge_hdngtextdesign">
	       	   	  		  		  	SOCIAL MEDIA MARKETING
	       	   	  		  		  </h1>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	Today, there are a host of social media platforms where a considerably large part of the population spends an increasing amount of time. Social media has turned into a necessary element in digital advertising campaigns to tap into this large potential client-base. Social Media Marketing provides an avenue to reap the benefits of social media to raise revenue in a specific business.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	Apart from benefiting from social media’s large and uneven spread throughout the world, social media marketing is a very cost-effective way of advertising any enterprise. It also has a virtuous effect on SEO ranking.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	We at Devant IT Solutions aspire to provide our clients with a social media marketing strategy which aims for an engagement with a rapidly increasing number of users and create a loyal consumer-base. Social Media Marketing strategy doesn’t end with introduction of the product or brand, it also entails promotional campaigns. We aim to provide our clients with a strategy which fulfills all these roles and increases revenue.
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
   <!-- ==============================social media marketing area section======================= -->

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection