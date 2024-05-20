@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
   @if($service_subcategory)
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 cmsmmanagement_breadcumback">
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
   
   <!-- ======================================cms management area section====================== --> 
      <section class="vcms_bckoutarea">
	       <div class="container">
	       	  <div class="row">
	       	   	<div class="col-lg-12 cmsmanagement_outsection">
	       	   	  	<div class="row">
							@php
                    				$desc_img_1_data = json_decode($service_subcategory->description_image1);
                    				$desc_img_1_image = isset($desc_img_1_data[0]->download_link) ? $desc_img_1_data[0]->download_link : '';
                   				   @endphp
									  @php
                    				$desc_img_2_data = json_decode($service_subcategory->description_image2);
                    				$desc_img_2_image = isset($desc_img_2_data[0]->download_link) ? $desc_img_2_data[0]->download_link : '';
                   				   @endphp
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	 <div class="cmsleft_outsection">
	       	   	  		  	 	  <img src="{{asset('storage/app/public/'.$desc_img_1_image)}}" class="lyupimg_design">
	       	   	  		  	 	  <img src="{{asset('storage/app/public/'.$desc_img_2_image)}}" class="lyupimg_design1">
	       	   	  		  	 </div>
	       	   	  		  </div>
	       	   	  		  <div class="col-lg-6">
	       	   	  		  	<div class="cmsright_outsection">
	       	   	  		  		  <h1 class="srvcpge_hdngtextdesign">
                                            {{@$service_subcategory->sub_category}}
	       	   	  		  		  </h1>
                        {!!@$service_subcategory->description!!}
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
													  <img src="{{ asset('storage/app/public/'.$proj_img_1_image) }}" alt="sample74"/>
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_1}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_1}}</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206 hover">
													  <img src="{{ asset('storage/app/public/'.$proj_img_2_image) }}" alt="sample69"/>
													  <figcaption>
													    <h2>{{@$service_subcategory->image_gallery_title_2}}</h2>
													    <p>{{@$service_subcategory->image_gallery_description_2}}</p>
													  </figcaption>
													  <a href="#"></a>
													</figure>
													<figure class="snip1206">
													  <img src="{{ asset('storage/app/public/'.$proj_img_3_image) }}" alt="sample13"/>
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
   <!-- ======================================cms management area section======================= -->

   <!-- ==============================footer section========================================== -->
 @endsection
@section('footer')

@include('website.include.footer')

@endsection
