@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 obreadcum_outsection1">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 Blogs
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Our Blogs</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ==================================blog details area section============================== --> 
      <div class="container">
      	<div class="row">
      	  	<div class="col-lg-12 blogdetails_outsectionx">
      	  	 	  <div class="row">
					   @php
					   $blogData = json_decode($blogs_details->image);
					   $blogimage = isset($blogData[0]->download_link) ? $blogData[0]->download_link : '';
					   @endphp
      	  	 	  	  <div class="col-lg-8">
							 @if(isset($blogs_details))
      	  	 	  	   	  <div class="leftblogdetails_outsection">
      	  	 	  	   	  	<img src="{{asset('storage/app/public/'.@$blogimage)}}" class="kleftblg_design">
      	  	 	  	   	  	<h1 class="cadb_textdesign">
							{{@$blogs_details->title}}
      	  	 	  	   	  	</h1>
      	  	 	  	   	  	<a href="#" class="amnicontext_design1">
							Published By: {{@$blogs_details->published_by}}
     	   	  	  	  	  	</a>
							
     	   	  	  	  	  	<a href="#" class="amnicontext_design1">
     	   	  	  	  	  	  <i class="fa-solid fa-calendar-days"></i>
							 {{@$blogs_details->published_at->format('d/m/Y')}}
     	   	  	  	  	  	</a>
							
     	   	  	  	  	  	<p class="wysap_textdesign">
							{!!@$blogs_details->description!!}
     	   	  	  	  	  	</p>
      	  	 	  	   	  </div>
							@endif
      	  	 	  	  </div>
      	  	 	  	  <div class="col-lg-4">
      	  	 	  	  	<div class="rightblogs_detailsoutsection">
      	  	 	  	  	 	  <div class="row">
      	  	 	  	  	 	   	<div class="col-lg-12">
      	  	 	  	  	 	   	   	<div class="rightblogs_fstoutsection">
      	  	 	  	  	 	   	   		  <!-- <input type="text" name="" placeholder="Search Here" class="blogsrchinput_design"> -->
      	  	 	  	  	 	   	   		  <!-- <button class="blogsrchbtn_inpdesign">Search</button> -->
      	  	 	  	  	 	   	   		  <div class="row">
											@if(isset($blogs))
            	    						@foreach($blogs as $list)
                   						    @php
                    						$blogData = json_decode($list->image);
                    						$blogimage = isset($blogData[0]->download_link) ? $blogData[0]->download_link : '';
                    						@endphp
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('storage/app/public/'.@$blogimage)}}" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
																		{{@$list->title}}
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										{{@$list->published_at->format('d/m/Y')}}
     	   	  	  	  	  										</a>
																			
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
											@endforeach
                                            @endif
      	  	 	  	  	 	   	   		  </div>
      	  	 	  	  	 	   	   		  <!-- <div class="row">
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('public/website')}}/assets/images/blog-3.jpg" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
      	  	 	  	  	 	   	   		  	  			Unlocking the Power of On-Page SEO
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										20/04/2024
     	   	  	  	  	  										</a>
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  </div> -->
      	  	 	  	  	 	   	   		  <!-- <div class="row">
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('public/website')}}/assets/images/blog-1.jpg" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
      	  	 	  	  	 	   	   		  	  			Unlocking the Power of On-Page SEO
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										24/04/2024
     	   	  	  	  	  										</a>
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  </div> -->
      	  	 	  	  	 	   	   		  <!-- <div class="row">
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('public/website')}}/assets/images/blog-4.jpg" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
      	  	 	  	  	 	   	   		  	  			Unlocking the Power of On-Page SEO
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										20/04/2024
     	   	  	  	  	  										</a>
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  </div> -->
      	  	 	  	  	 	   	   		  <!-- <div class="row">
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('public/website')}}/assets/images/blog-2.jpg" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
      	  	 	  	  	 	   	   		  	  			Unlocking the Power of On-Page SEO
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										24/04/2024
     	   	  	  	  	  										</a>
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  </div> -->
      	  	 	  	  	 	   	   		  <!-- <div class="row">
      	  	 	  	  	 	   	   		  	  <div class="col-lg-4">
      	  	 	  	  	 	   	   		  	  	<div class="rcntimg_leftoutarea">
      	  	 	  	  	 	   	   		  	  		<img src="{{asset('public/website')}}/assets/images/blog-3.jpg" class="blgimg_designhc">
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  	  <div class="col-lg-8">
      	  	 	  	  	 	   	   		  	  	<div class="rcntdtls_rightoutarea">
      	  	 	  	  	 	   	   		  	  		<p class="bloghdng_textrgt">
      	  	 	  	  	 	   	   		  	  			Unlocking the Power of On-Page SEO
      	  	 	  	  	 	   	   		  	  		</p>
      	  	 	  	  	 	   	   		  	  		<a href="#" class="amnicontext_designblgdate">
     	   	  	  	  	  	  										<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	  										20/04/2024
     	   	  	  	  	  										</a>
      	  	 	  	  	 	   	   		  	  	</div>
      	  	 	  	  	 	   	   		  	  </div>
      	  	 	  	  	 	   	   		  </div> -->
      	  	 	  	  	 	   	   	</div>
      	  	 	  	  	 	   	</div>
      	  	 	  	  	 	  </div>
      	  	 	  	  	 	  <div class="row">
      	  	 	  	  	 	  	  <div class="col-lg-12">
      	  	 	  	  	 	  	  	 <div class="alltags_outsection">
      	  	 	  	  	 	  	  	 	  <h1 class="atag_textdesign">All Tag</h1>
      	  	 	  	  	 	  	  	 	  <ul class="altag_textdesignlist">
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Website
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Web Design
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Development
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Graphic Design
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			UI/UX Design
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Software Design
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Website
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Web Design
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  	<li>
      	  	 	  	  	 	  	  	 	  		<a href="#">
      	  	 	  	  	 	  	  	 	  			Development
      	  	 	  	  	 	  	  	 	  		</a>
      	  	 	  	  	 	  	  	 	  	</li>
      	  	 	  	  	 	  	  	 	  </ul>
      	  	 	  	  	 	  	  	 </div>
      	  	 	  	  	 	  	  </div>
      	  	 	  	  	 	  </div>
      	  	 	  	  	</div>
      	  	 	  	  </div>
      	  	 	  </div>
      	  	</div>
      	</div>
      </div>
   <!-- ==================================blog details area section============================== -->  

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection
