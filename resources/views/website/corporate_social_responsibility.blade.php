@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 corporatescoial_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 CORPORATE SOCIAL SUSTAINBILITY
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>A Today That Includes Tomorrow</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ======================corporate social sustainbility area section====================== --> 
        <section class="corporate_Socialresbackarea">
        	  <div class="container">
        	    	<div class="row">
        	    	  	<div class="col-lg-12 corporatesocial_bresareaout">
        	    	  	  	 <div class="row">
        	    	  	  	 	   <div class="col-lg-6">
        	    	  	  	 	   	  <div class="corsocialleft_outsection">
        	    	  	  	 	   	  	  <img src="{{asset('public/website')}}/assets/images/corporate-social-responsibilitymain.jpg" class="kcorportae_imgdesign">
        	    	  	  	 	   	  </div>
        	    	  	  	 	   </div>
        	    	  	  	 	   <div class="col-lg-6">
        	    	  	  	 	   	  <div class="corosright_outsection">
        	    	  	  	 	   	  	 <h1 class="crstbnutx_ltextdesign">CORPORATE SOCIAL RESPONSIBILITY</h1>
	        		 	   	    	  	 	   <p class="rst_textdesignxjkn">
	        		 	   	    	  	 	   	Corporate sustainability is an approach aiming to create long-term stakeholder value through the implementation of a business strategy that focuses on the ethical, social, environmental, cultural, and economic dimensions of doing business. The strategies created are intended to foster longevity, transparency, and proper employee development within business organizations Firms will often express their commitment to corporate sustainability through a statement of Corporate Sustainability Standards (CSS), which are usually policies and measures that aim to meet, or exceed, minimum regulatory requirements.
	        		 	   	    	  	 	   </p>
	        		 	   	    	  	 	   <p class="rst_textdesignx">
	        		 	   	    	  	 	   	The business mindset has shifted. Governments, societies and stakeholders expect corporations to engage in business practices that are good for people and the environment, not just the bottom line. This is because sustainable economic growth is no longer just a business imperative — it’s critical to our future.
	        		 	   	    	  	 	   </p>
        	    	  	  	 	   	  </div>
        	    	  	  	 	   </div>
        	    	  	  	 </div>
        	    	  	</div>
        	    	</div>
        	  </div>
        </section>
   <!-- ======================corporate social sustainbility area section======================= -->

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection