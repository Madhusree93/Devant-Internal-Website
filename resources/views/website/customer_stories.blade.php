@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 customerstories_bcksection">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 Customer Stories
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Customer Stories</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ================================customer stories area section========================== --> 
      <section class="jcustomer_looutsection">
        <div class="container">
        	  <div class="row">
        	  	  <div class="col-lg-12 customer_storiesoutsection">
        	  	  	   <div class="row">
        	  	  	   	   <div class="col-lg-5">
        	  	  	   	   	   <div class="leftoimg_outarea">
        	  	  	   	   	   	  <img src="{{asset('public/website')}}/assets/images/customer-storiess.png" class="customerimg_storydesign">
        	  	  	   	   	   </div>
        	  	  	   	   </div>
        	  	  	   	   <div class="col-lg-7">
        	  	  	   	   	   <div class="rightoip_outsection">
        	  	  	   	   	   	  <h1 class="ocstext_design">OUR CUSTOMER STORIES</h1>
        	  	  	   	   	   	  <p class="cusp_text">
        	  	  	   	   	   	  	Customer stories, also known as customer success stories or case studies, are narratives that showcase how a particular product or service has positively impacted a customer's experience or business. These stories typically highlight real-world examples of customers using a product or service to solve a problem, achieve a goal, or overcome a challenge.
        	  	  	   	   	   	  </p>
        	  	  	   	   	   	  <p class="cusp_text">
        	  	  	   	   	   	  	Customer stories are often used by businesses as marketing and sales tools to build credibility, demonstrate the value of their offerings, and provide social proof to potential customers. They typically include details such as the customer's background, the problem they faced, how the product or service helped them, and the results or outcomes they achieved. Customer stories can be presented in various formats, including written articles, videos, testimonials, or presentations.
        	  	  	   	   	   	  </p>
        	  	  	   	   	   </div>
        	  	  	   	   </div>
        	  	  	   </div>
        	  	  </div>
        	  </div>
        </div>
      </section>  
      <ul class="timeline_posarea">
			    <li style="--accent-color:#41516C">
			        <div class="date">SYLVANPLY</div>
			        <p class="timeline_shdescrptntext">
			        	Sylvan Ply is synonymous with trust and reliability, offering the best plywood and blockboard in India. With a legacy of over 70 years.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories1.jpg" class="jcstermstr">
			    </li>
			    <li style="--accent-color:#FBCA3E">
			        <div class="date">DUCKBACK</div>
			        <p class="timeline_shdescrptntext">
			        	Huge collection of kid's backpacks at low offer prices & discounts. Explore Backpack Collection Online.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories2.jpg" class="jcstermstr">
			    </li>
			    <li style="--accent-color:#E24A68">
			        <div class="date">USHA MARTIN</div>
			        <p class="timeline_shdescrptntext">
			        	Usha Martin Limited is an Indian multinational company that primarily operates in the steel and wire rope manufacturing industry.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories3.jpg" class="jcstermstr">
			    </li>
			    <li style="--accent-color:#1B5F8C">
			        <div class="date">AME GROUP</div>
			        <p class="timeline_shdescrptntext">
			        	The current holding company of AME Group, AME Infrologist Pvt. Ltd. was incorporated in the year 2019. It is incorporated under the umbrella of renowned AM Enterprises, a partnership firm.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories4.jpg" class="jcstermstr">
			    </li>
			    <li style="--accent-color:#4CADAD">
			        <div class="date">UNP</div>
			        <p class="timeline_shdescrptntext">
			        	UNP was started in 2016 when a group of like-minded and experienced professionals from various spheres of Data Science, Business Analytics, Technology.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories5.jpg" class="jcstermstr">
			    </li>
			    <li style="--accent-color:#7d3cff">
			        <div class="date">STEELCO FURNITURE</div>
			        <p class="timeline_shdescrptntext">
			        	Welcome to our furniture company, where we specialize in creating high-quality and stylish furniture that transforms your living spaces into comfortable and beautiful environments.
			        </p>
			        <img src="{{asset('public/website')}}/assets/images/customer-stories6.jpg" class="jcstermstr">
			    </li>
      </ul>
   <!-- ================================customer stories area section=========================== -->  

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection