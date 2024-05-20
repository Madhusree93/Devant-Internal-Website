@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 corporate_sutanbreadcumoutarea">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 CORPORATE SUSTAINBILITY
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
   
   <!-- =============================corporate sustainbility area section====================== --> 
        <section class="corp_outsection">
        	<div class="container">
        		 <div class="row">
        		 	   <div class="col-lg-12 corporate_sustainoutsection">
        		 	   	    <div class="row">
        		 	   	    	  <div class="col-lg-6">
        		 	   	    	  	 <div class="leftcorporate_outsection">
        		 	   	    	  	 	   <h1 class="crstbn_ltextdesign">CORPORATE SUSTAINBILITY</h1>
        		 	   	    	  	 	   <p class="rst_textdesignx">
        		 	   	    	  	 	   	Corporate sustainability is an approach aiming to create long-term stakeholder value through the implementation of a business strategy that focuses on the ethical, social, environmental, cultural, and economic dimensions of doing business. The strategies created are intended to foster longevity, transparency, and proper employee development within business organizations Firms will often express their commitment to corporate sustainability through a statement of Corporate Sustainability Standards (CSS), which are usually policies and measures that aim to meet, or exceed, minimum regulatory requirements.
        		 	   	    	  	 	   </p>
        		 	   	    	  	 	   <p class="rst_textdesignx">
        		 	   	    	  	 	   	The business mindset has shifted. Governments, societies and stakeholders expect corporations to engage in business practices that are good for people and the environment, not just the bottom line. This is because sustainable economic growth is no longer just a business imperative — it’s critical to our future.
        		 	   	    	  	 	   </p>
        		 	   	    	  	 </div>
        		 	   	    	  </div>
        		 	   	    	  <div class="col-lg-6 order-first order-md-1">
        		 	   	    	  	  <div class="rightcorporate_outsection">
        		 	   	    	  	  	  <img src="{{asset('public/website')}}/assets/images/corporate-sustainbility.jpg" class="cxptrnimg_design">
        		 	   	    	  	  </div>
        		 	   	    	  </div>
        		 	   	    </div>
        		 	   </div>
        		 </div>
        	</div>
        </section>
   <!-- =============================corporate sustainbility area section======================= -->

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection