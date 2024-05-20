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
   
   <!-- ==================================blog list area section================================ --> 
      <section class="oblse_outback1">
     <div class="container">
     	  <div class="row">
     	   	  <div class="col-lg-12 lourblog_mainoutsection">
     	   	  	  <h2 class="oblog_fsthdngtext1">OUR BLOG</h2>
     	   	  	  <div class="row">
     	   	  	  	  <div class="col-lg-12">
     	   	  	  	  	  <div class="hdngfst_leftoutarea">
     	   	  	  	  	  	  <h1 class="rdltstnws_textinblg">
     	   	  	  	  	  	  	<span class="rdltstnws_text1">
     	   	  	  	  	  	  	  Read Latest 
     	   	  	  	  	  	  	</span>  
     	   	  	  	  	  	  	News
     	   	  	  	  	  	  </h1>
     	   	  	  	  	  </div>
     	   	  	  	  </div>
     	   	  	  </div>
					<div class="row">
					@if(isset($blogs))
            	    @foreach($blogs as $list)
                    @php
                    $blogData = json_decode($list->image);
                    $blogimage = isset($blogData[0]->download_link) ? $blogData[0]->download_link : '';
                    @endphp
     	   	  	  	  <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{ asset('storage/app/public/'.$blogimage) }}" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">{{@$list->blog_type}}</a>
     	   	  	  	  	  	   	  		  <!-- <a href="#" class="tagline_blogdesign">Design</a> -->
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	{{@$list->title}}
     	   	  	  	  	  	   	  		  </h1>
										
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  <img src="{{asset('public/website')}}/assets/images/blog-man.png" class="ikmusee_imgdesign">
										  Published By: {{@$list->published_by}}
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	{{@$list->published_at->format('d/m/Y')}}
     	   	  	  	  	  	   	  		  </a>
										
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="{{route('blog_details')}}/{{@$list->id}}">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div>
					@endforeach
                    @endif
     	   	  	  <!-- <div class="row">
     	   	  	  	  <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-1.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Design</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="{{route('blog_details')}}">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  	  <!-- <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-2.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Development</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="{{route('blog_details')}}">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  	  <!-- <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-3.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Design</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="blog-details.html">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  	  <!-- <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-4.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Development</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="blog-details.html">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  	  <!-- <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-1.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Design</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="blog-details.html">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  	  <!-- <div class="col-lg-6">
     	   	  	  	  	  <div class="jblog_outarea">
     	   	  	  	  	  	  <div class="row">
     	   	  	  	  	  	   	  <div class="col-lg-5">
     	   	  	  	  	  	   	  	  <div class="blog_leftoutsection">
     	   	  	  	  	  	   	  	  	  <img src="{{asset('public/website')}}/assets/images/blog-2.jpg" class="blghme_imgdesign">
     	   	  	  	  	  	   	  	  </div>
     	   	  	  	  	  	   	  </div>  
     	   	  	  	  	  	   	  <div class="col-lg-7">
     	   	  	  	  	  	   	  	<div class="blog_rightoutsection">
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Marketing</a>
     	   	  	  	  	  	   	  		  <a href="#" class="tagline_blogdesign">Development</a>
     	   	  	  	  	  	   	  		  <h1 class="cradtext_design">
     	   	  	  	  	  	   	  		  	Creative advertising in our life became a info noise
     	   	  	  	  	  	   	  		  </h1>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-user"></i>
     	   	  	  	  	  	   	  		  	Admin
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <a href="#" class="amnicontext_design">
     	   	  	  	  	  	   	  		  	<i class="fa-solid fa-calendar-days"></i>
     	   	  	  	  	  	   	  		  	24/04/2024
     	   	  	  	  	  	   	  		  </a>
     	   	  	  	  	  	   	  		  <button class="blghme_btndesigns">
     	   	  	  	  	  	   	  		  	 <a href="blog-details.html">
     	   	  	  	  	  	   	  		  	 	  Read More
     	   	  	  	  	  	   	  		  	 	  <i class="fa-solid fa-arrow-right-long"></i>
     	   	  	  	  	  	   	  		  	 </a>
     	   	  	  	  	  	   	  		  </button>
     	   	  	  	  	  	   	  	</div>
     	   	  	  	  	  	   	  </div>
     	   	  	  	  	  	  </div>
     	   	  	  	  	  </div>
     	   	  	  	  </div> -->
     	   	  	  </div>
     	   	  </div>
     	  </div>
     </div>
    </section> 
   <!-- ==================================blog list area section================================ -->  

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection
