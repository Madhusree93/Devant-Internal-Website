@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 associate_loutbackground">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 Associate
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Associate</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ==================================associate area section================================ --> 
        <div class="container">
        	  <div class="row">
        	  	<div class="col-lg-12 ourassociate_outsection">
        	  		  <h1 class="oaestext_design">Our Associates</h1>
        	  		  <p class="wboutext_design">
        	  		  	we believe our associates are our greatest competitive advantage
        	  		  </p>
        	  		  <div class="row">
										<div class="col-lg-4">
											<div class="mainassociate_outsection">
													<figure class="snip1200">
					                    <img src="{{asset('public/website')}}/assets/images/associate-1.png">
														  <figcaption>
														    <p>
														    	Sylvan Ply is synonymous with trust and reliability, offering best plywood and blockboard in India.
														    </p>
														    <div class="heading">
														      <h2>Sylvan Ply</h2>
														    </div>
														  </figcaption>
					  									<a href="https://sylvanply.com/" target="_blank"></a>
									        </figure>				  	 	  
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mainassociate_outsection">
													<figure class="snip1200">
					                    <img src="{{asset('public/website')}}/assets/images/associate-2.png">
														  <figcaption>
														    <p>
														    	Utkarsh India Limited is a leading manufacturer and supplier of high-end engineering products and services in the infrastructure.
														    </p>
														    <div class="heading">
														      <h2>Utkarsh</h2>
														    </div>
														  </figcaption>
					  									<a href="https://utkarshindia.in/" target="_blank"></a>
									        </figure>				  	 	  
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mainassociate_outsection">
													<figure class="snip1200">
					                    <img src="{{asset('public/website')}}/assets/images/associate-3.png">
														  <figcaption>
														    <p>
														    	We have one-stop solutions for the Best Waterproof Backpacks, Air pillows.
														    </p>
														    <div class="heading">
														      <h2>Duckback</h2>
														    </div>
														  </figcaption>
					  									<a href="https://duckbackindia.com/" target="_blank"></a>
									        </figure>				  	 	  
											</div>
										</div>
									</div>
        	  	</div>
        	  </div>
        </div>
   <!-- ==================================associate area section================================ -->  

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection
