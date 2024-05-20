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
                                               {{@$service_subcategory->sub_category}}
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>{{@$service_subcategory->sub_category}}</li>
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
	       	   	  		  		  	Brochures are a representation of an enterprise with a declaration of objectives, ideals and principles of the enterprise in an appealing way. It is an intricate way of presentation of the magnanimity of the brand to integrate someone into the particular brand.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	We at Devant IT Solutions aspire to make brochures as an adequate and effective representative of our clients’ brand. Our brochure designs are characterized as an ensemble of an attractive layout with effective delivery of the enterprise’s message according to the perceived needs of the target audience.
	       	   	  		  		  </p>
	       	   	  		  		  <p class="cmsetext_designcms1">
	       	   	  		  		  	The placement of contents alongside other aspects of designs such as {{asset('public/website')}}/assets/images, headers, icons etc are discussed in detail with clients giving utmost priority to delivery of a product tailor-made to suit the preferences of clientele.
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
													  <img src="{{ asset('storage/app/public/'.$proj_img_1_image) }}" />
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_1}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_1}}</p>
													  </figcaption>
													  <!-- <a href="#"></a> -->
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
   <!-- =============================android app development area section======================= -->

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection
