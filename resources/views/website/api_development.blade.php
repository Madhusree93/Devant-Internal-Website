@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 cmsmmanagement_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 CONTENT MANAGEMENT SERVICE
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Content Management Service</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ======================================cms management area section====================== --> 
      <section class="vcms_bckoutarea">
	       <div class="container">
	       	  <div class="row">
	       	   	<div class="col-lg-12 cmsmanagement_outsection">
	       	   	  	<div class="row">
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	 <div class="cmsleft_outsection">
	       	   	  		  	 	  <img src="{{asset('public/website')}}/assets/images/ellipse-2.png" class="lyupimg_design">
	       	   	  		  	 	  <img src="{{asset('public/website')}}/assets/images/cms-managementimage.jpg" class="lyupimg_design1">
	       	   	  		  	 </div>
	       	   	  		  </div>
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	<div class="cmsright_outsection">
	       	   	  		  		  <h1 class="srvcpge_hdngtextdesign">
	       	   	  		  		  	CONTENT MANAGEMENT SERVICE
	       	   	  		  		  </h1>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	Content management system enables one to make or to adjust content in a website without prior particular specialized information. It encompasses content creation, storage, workflow management as well as publication. It is collaborative in nature as it allows multiple persons to contribute to content.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	We at Devant IT Solutions aspire to provide our clients with a strategy for a content management system that takes into account the changing technological landscape.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms">
	       	   	  		  		  	Our service aims to deliver service in this field which is both financially beneficial as well as has a virtuous effect on brand perception. We provide guidance to our clients in choosing appropriate content management system platforms compatible with financial and technological needs. We work on the basis of a comprehensive understanding of our client’s goals and objectives.
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
   <!-- ======================================cms management area section======================= -->

   <!-- ==============================footer section========================================== -->
 @endsection
@section('footer')

@include('website.include.footer')

@endsection
