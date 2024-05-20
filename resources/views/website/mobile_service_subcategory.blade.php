@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')

   <!-- ==================================breadcum section====================================== -->
   @if($service_subcategory)
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 androidappdevelopmemnt_breadcumsection">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
                                               {{@$service_subcategory->sub_category}}
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li> {{@$service_subcategory->sub_category}}</li>
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
							 @php
                    				$desc_img_1_data = json_decode($service_subcategory->description_image1);
                    				$desc_img_1_image = isset($desc_img_1_data[0]->download_link) ? $desc_img_1_data[0]->download_link : '';
                   				   @endphp
	          	 		  	  <div class="col-lg-6">
	          	 		  	  	 <div class="leftandroidimg_outarea">
	          	 		  	  	 	  <img src="{{asset('storage/app/public/'.$desc_img_1_image)}}" class="scxndelcs_imgdesign">
	          	 		  	  	 </div>
	          	 		  	  </div>
	          	 		  	  <div class="col-lg-6">
	          	 		  	  	<div class="rightandroing_outarea">
	          	 		  	  		<h1 class="srvcpge_hdngtextdesign1">
                                           {{@$service_subcategory->sub_category}}
	       	   	  		  		  </h1>
                                            {!!@$service_subcategory->description!!}
	       	   	  		  		  <!-- <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development refers to the process of creating software applications specifically for devices that run on the Android operating system. Android is a mobile operating system developed by Google, and it powers a wide range of devices, including smartphones, tablets, smartwatches, and smart TVs.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development involves several stages, including conceptualization, design, coding, testing, and deployment. Developers use programming languages such as Java, Kotlin, or C++ along with development tools like Android Studio to create Android apps.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	Android app development offers developers a vast and diverse ecosystem to create innovative and engaging mobile applications that cater to the needs and preferences of millions of users worldwide.
	       	   	  		  		  </p> -->
	          	 		  	  	</div>
	          	 		  	  </div>
	          	 		  </div>
	          	 		  <div class="row">
							 @php
                    				$proj_img_1_data = json_decode($service_subcategory->image_gallery1);
                    				$proj_img_1_image = isset($proj_img_1_data[0]->download_link) ? $proj_img_1_data[0]->download_link : '';
                   				   @endphp
									  @php
                    				$proj_img_2_data = json_decode($service_subcategory->image_gallery2);
                    				$proj_img_2_image = isset($proj_img_2_data[0]->download_link) ? $proj_img_2_data[0]->download_link : '';
                   				   @endphp
									  @php
                    				$proj_img_3_data = json_decode($service_subcategory->image_gallery3);
                    				$proj_img_3_image = isset($proj_img_3_data[0]->download_link) ? $proj_img_3_data[0]->download_link : '';
                   				   @endphp
							 <div class="col-lg-12 projectshowcase_moutsection">
	       	   	  		  	  <h1 class="srvcpge_hdngtextdesign">
	       	   	  		  		  PROJECT GALLERY
	       	   	  		  		</h1>
	       	   	  		  		<figure class="snip1206">
													  <img src="{{ asset('storage/app/public/'.$proj_img_1_image) }}" alt=""/>
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_1}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_1}}</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206 hover">
													  <img src="{{ asset('storage/app/public/'.$proj_img_2_image) }}" alt=""/>
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_2}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_2}}</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206">
													  <img src="{{ asset('storage/app/public/'.$proj_img_3_image) }}" alt=""/>
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_3}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_3}}</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
	       	   	  		  </div>
	       	   	  	</div>
	          	 	</div>
	          </div>
	        </div>
      </section> 
      @endif
   <!-- =============================android app development area section======================= -->

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection


