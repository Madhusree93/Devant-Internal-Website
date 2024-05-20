<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$list1 = DB::table('service_subcategories')->where('category',1)->get();
	?>
	<?php
	$list2 = DB::table('service_subcategories')->where('category',2)->get();
	?>
	<?php
	$list3 = DB::table('service_subcategories')->where('category',3)->get();
	?>
	<?php
	$list4 = DB::table('service_subcategories')->where('category',4)->get();
	?>
  <?php
  $data= DB::table('seo_details')->where('url',Request::url())->first();
  ?>
 <meta charset="utf-8">
    @if($data)
  <title>{{$data->title}}</title>
  <meta name="description" content="{{$data->description}}">
  <meta name="keywords" content="{{$data->keyword}}">
	<meta property="og:type" content="{{$data->og_type}}" />
	<meta property="og:title" content="{{$data->og_title}}" />
	<meta property="og:description" content="{{$data->og_description}}" />
	@endif
	<meta property="og:locale" content="en_US" />
	<link rel="canonical" href="{{Request::url()}}" />
	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="Devnt It" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('public/website')}}/assets/images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/website')}}/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/website')}}/assets/css/responsive.css">
  

</head>
<body>
   <!-- ==================================nav bar============================================= -->
   <header class="header">
      <div class="container">
        <div class="row v-center">
          <div class="header-item item-left">
            <div class="logo">
              <a href="{{route('index')}}">
			  <img src="{{asset('public/website')}}/assets/images/logo-white.png" class="sitelogo_imgdesign">
              </a>
            </div>
          </div>
          <!-- menu start here -->
          <div class="header-item item-center">
            <div class="menu-overlay"></div>
            <nav class="menu">
              <div class="mobile-menu-head">
                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="menu-main mainnav_outsection">
              	<li class="menu-item-has-children">
	                <a href="#">
	                    	Who we are
	                    	<i class="fa fa-angle-down"></i>
	                </a>
	                <div class="sub-menu mega-menu mega-menu-column-4">
		                    <div class="list-item">
			                    <h4 class="title">About Us</h4>
			                    <ul class="custominner_mainoutsection">
			                        <li>
			                        	<a href="{{route('the_devant_way')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/handshake.png" class="dmallimg_mnudesign">
			                        		The Devant Way
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('corporate_sustainability')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/corporate.png" class="dmallimg_mnudesign">
			                        		Corporate Sustainability
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('corporate_social_responsibility')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/public-service.png" class="dmallimg_mnudesign">
			                        		Corporate Social Responsibility
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('leadership')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/leadership.png" class="dmallimg_mnudesign">
			                        		Leadership
			                        	</a>
			                        </li>
			                    </ul>
			                    <!-- <h4 class="title">Leadership</h4> -->
		                    </div>
		                    <div class="firstmenu_imgarea">
			                    <img src="{{asset('public/website')}}/assets/images/third-menuimg.jpg" alt="Chair" class="fstimg_menudesign" />
                              </div>
	                </div>
                </li>
                <li class="menu-item-has-children">
	                <a href="#">
	                    	Services
	                    	<i class="fa fa-angle-down"></i>
	                </a>
				
	                <div class="sub-menu mega-menu mega-menu-column-4">
		                    <div class="list-item">
			                    <h4 class="title">
			                    	<a href="{{route('best-web-development-company-in-india')}}" class="menuunder_mainsubheading">
			                    	  Web Development
			                    	</a>
			                    </h4>
								<ul class="custominner_mainoutsection">
								@if($list1)
								@foreach($list1 as $userdata)
								@php
                    				$logo_desc_img_1_data = json_decode($userdata->logo_subcategory);
                    				$logo_desc_img_1_image = isset($logo_desc_img_1_data[0]->download_link) ? $logo_desc_img_1_data[0]->download_link : '';
                   				   @endphp
			                        <li>
			                        	<a href="{{url('/service_subcategory')}}/{{$userdata->slug}}">
			                        		<img src="{{asset('storage/app/public/'.$logo_desc_img_1_image)}}" class="dmallimg_mnudesign">
			                        		{{$userdata->sub_category}}
			                        	</a>
			                        </li>
								@endforeach
								@endif
			                        <!-- <li>
			                        	<a href="{{url('/service_subcategory')}}/Ecommerce_Website_Development">
			                        		<img src="{{asset('public/website')}}/assets/images/web.png" class="dmallimg_mnudesign">
			                        		Ecommerce Website Development
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/service_subcategory')}}/Api_Development">
			                        		<img src="{{asset('public/website')}}/assets/images/app.png" class="dmallimg_mnudesign">
			                        		Api Development
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/service_subcategory')}}/Website_Design">
			                        		<img src="{{asset('public/website')}}/assets/images/cross-platform.png" class="dmallimg_mnudesign">
			                        		Website Design
			                        	</a>
			                        </li> -->
			                    </ul>
			                    <h4 class="title">
			                    	<a href="{{route('best-digital-marketing-service-in-india')}}" class="menuunder_mainsubheading">
			                    	   Digital Marketing
			                    	</a>   
			                    </h4>
			                    <ul class="custominner_mainoutsection">
								@if($list3)
								@foreach($list3 as $userdata)
								@php
                    				$logo_desc_img_2_data = json_decode($userdata->logo_subcategory);
                    				$logo_desc_img_2_image = isset($logo_desc_img_2_data[0]->download_link) ? $logo_desc_img_2_data[0]->download_link : '';
                   				   @endphp
			                        <li>
			                        	<a href="{{url('/digital_service_subcategory')}}/{{$userdata->slug}}">
			                        		<img src="{{asset('storage/app/public/'.$logo_desc_img_2_image)}}" class="dmallimg_mnudesign">
			                        		{{$userdata->sub_category}}
			                        	</a>
			                        </li>
									@endforeach
								   @endif
			                       
			                        <!-- <li>
			                        	<a href="{{url('/digital_service_subcategory')}}/Social_Media_Optimization">
			                        		<img src="{{asset('public/website')}}/assets/images/performance.png" class="dmallimg_mnudesign">
			                        		Social Media Optimization
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/digital_service_subcategory')}}/Email_Marketing">
			                        		<img src="{{asset('public/website')}}/assets/images/envelope.png" class="dmallimg_mnudesign">
			                        		Email Marketing
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/digital_service_subcategory')}}/Content_Marketing">
			                        		<img src="{{asset('public/website')}}/assets/images/docs.png" class="dmallimg_mnudesign">
			                        		Content Marketing
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/digital_service_subcategory')}}/Search_Engine_Optimization">
			                        		<img src="{{asset('public/website')}}/assets/images/search-engine-optimization.png" class="dmallimg_mnudesign">
			                        		Search Engine Optimization
			                        	</a>
			                        </li> -->
			                    </ul>
		                    </div>
		                    <div class="list-item">
			                    <h4 class="title">
			                    	<a href="{{route('best-mobile-app-development-company-in-india')}}" class="menuunder_mainsubheading">
			                    	Mobile App Development
			                    	</a>
			                    </h4>
			                    <ul class="custominner_mainoutsection">
								@if($list2)
								@foreach($list2 as $userdata)
								@php
                    				$logo_desc_img_3_data = json_decode($userdata->logo_subcategory);
                    				$logo_desc_img_3_image = isset($logo_desc_img_3_data[0]->download_link) ? $logo_desc_img_3_data[0]->download_link : '';
                   				   @endphp
			                        <li>
			                        	<a href="{{url('/mobile_service_subcategory')}}/{{$userdata->slug}}">
			                        		<img src="{{asset('storage/app/public/'.$logo_desc_img_3_image)}}" class="dmallimg_mnudesign">
			                        		{{$userdata->sub_category}}
			                        	</a>
			                        </li>
									@endforeach
								   @endif
			                        <!-- <li>
			                        	<a href="{{url('/mobile_service_subcategory')}}/App_Store_Optimization">
			                        		<img src="{{asset('public/website')}}/assets/images/app-store.png" class="dmallimg_mnudesign">
			                        		App Store Optimization
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/mobile_service_subcategory')}}/Mobile_Game_Development">
			                        		<img src="{{asset('public/website')}}/assets/images/game-development.png" class="dmallimg_mnudesign">
			                        		Mobile Game Development
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/mobile_service_subcategory')}}/Ios_App_Development">
			                        		<img src="{{asset('public/website')}}/assets/images/website.png" class="dmallimg_mnudesign">
			                        		Ios App Development
			                        	</a>
			                        </li> -->
			                    </ul>
			                    <h4 class="title">
			                    	<a href="{{route('top-graphics-design-agency-in-india')}}" class="menuunder_mainsubheading">
			                    	Graphics Design
			                    	</a>
			                    </h4>
			                    <ul class="custominner_mainoutsection">
								@if($list4)
								@foreach($list4 as $userdata)
								@php
                    				$logo_desc_img_4_data = json_decode($userdata->logo_subcategory);
                    				$logo_desc_img_4_image = isset($logo_desc_img_4_data[0]->download_link) ? $logo_desc_img_4_data[0]->download_link : '';
                   				   @endphp
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/{{$userdata->slug}}">
			                        		<img src="{{asset('storage/app/public/'.$logo_desc_img_4_image)}}" class="dmallimg_mnudesign">
			                        		{{$userdata->sub_category}}
			                        	</a>
			                        </li>
									@endforeach
								   @endif
			                        <!-- <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Logo_and_Corporate_ID_design">
			                        		<img src="{{asset('public/website')}}/assets/images/photoshop.png" class="dmallimg_mnudesign">
			                        		Logo & Corporate ID design
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Animated_Video">
			                        		<img src="{{asset('public/website')}}/assets/images/responsive.png" class="dmallimg_mnudesign">
			                        		Animated Video
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Graphic_and_Infographic">
			                        		<img src="{{asset('public/website')}}/assets/images/pen-tool.png" class="dmallimg_mnudesign">
			                        		Graphic & Infographic
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Illustration">
			                        		<img src="{{asset('public/website')}}/assets/images/pen.png" class="dmallimg_mnudesign">
			                        		Illustration
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Powerpoint_Design">
			                        		<img src="{{asset('public/website')}}/assets/images/ppt.png" class="dmallimg_mnudesign">
			                        		Powerpoint Design
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{url('/graphic_service_subcategory')}}/Print_Media">
			                        		<img src="{{asset('public/website')}}/assets/images/printer.png" class="dmallimg_mnudesign">
			                        		Print Media
			                        	</a>
			                        </li> -->
			                    </ul>
		                    </div>
		                    <div class="secondmenu_imgarea">
			                    <img src="{{asset('public/website')}}/assets/images/second-menuimg.jpg" alt="Chair" class="secondimg_menudesign" />
                        </div>
	                </div>
					
                </li>
                <li class="menu-item-has-children">
	                <a href="#">
	                    	Products
	                    	<i class="fa fa-angle-down"></i>
	                </a>
	                <div class="sub-menu mega-menu mega-menu-column-4">
		                    <div class="list-item">
			                    <h4 class="title">Products and Platforms</h4>
			                    <ul class="custominner_mainoutsection">
			                        <li>
			                        	<a href="{{route('documentmanagement_system')}}">
			                        		<!-- <i class="fa-solid fa-angle-right"></i> -->
			                        		<img src="{{asset('public/website')}}/assets/images/docs.png" class="dmallimg_mnudesign">
			                        		Documents Management System
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('learning_management_system')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/book.png" class="dmallimg_mnudesign">
			                        		Learning Management System
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('hospital_management_system')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/health.png" class="dmallimg_mnudesign">
			                        		Hospital Management System
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('erp')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/coding.png" class="dmallimg_mnudesign">
			                        		Erp
			                        	</a>
			                        </li>
			                    </ul>
			                    <h4 class="title">
			                    	<a href="#" class="menuunder_mainsubheading">
			                    	 Research and Innovation
			                    	</a>
			                    </h4>
		                    </div>
		                    <div class="firstmenu_imgarea">
			                    <img src="{{asset('public/website')}}/assets/images/first-menuimg.jpg" alt="Chair" class="fstimg_menudesign" />
                              </div>
	                </div>
                </li>    
                    <li class="menu-item-has-children">
	                    <a href="#">
	                  	  Insights 
	                  	  <i class="fas fa-angle-down"></i>
	                    </a>
	                    <div class="sub-menu single-column-menu">
		                    <ul class="rmove_marker">
		                         <li>
			                      	<a href="{{route('customer_stories')}}">
			                      		<img src="{{asset('public/website')}}/assets/images/businessman.png" class="dmallimg_mnudesign">
			                      		Customer Stories
			                      	</a>
		                         </li>
		                    </ul>
	                    </div>
                	  </li>
                	  <li class="menu-item-has-children">
	                    <a href="#">
	                    	Careers
	                    	<i class="fa fa-angle-down"></i>
	                    </a>
	                    <div class="sub-menu mega-menu mega-menu-column-4">
		                    <div class="list-item">
			                    <h4 class="title">Country</h4>
			                    <ul class="custominner_mainoutsection">
			                        <li>
			                        	<a href="{{route('india_career')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/map.png" class="dmallimg_mnudesign">
			                        		India
			                        	</a>
			                        </li>
			                        <li>
			                        	<a href="{{route('canada_career')}}">
			                        		<img src="{{asset('public/website')}}/assets/images/location.png" class="dmallimg_mnudesign">
			                        		Canada
			                        	</a>
			                        </li>
			                    </ul>
		                    </div>
		                    <div class="firstmenu_imgarea">
			                    <img src="{{asset('public/website')}}/assets/images/fourth-menuimg.jpg" alt="Chair" class="fstimg_menudesign" />
                              </div>
	                    </div>
                    </li>
                	  <li>
                	    <a href="{{route('associate')}}">
	                  	Customer 
	                   </a>
                	  </li>
                	  <li>
                	  <a href="{{route('blog_list')}}">	
	                  	Blogs
	                  </a>
                	  </li>
                	  <li>
                	  <a href="{{route('contact_us')}}">	
	                  	Contact Us 
	                  </a>
                	  </li>
              </ul>
            </nav>
          </div>
          <!-- menu end here -->
          <div class="header-item item-right">
            <div class="mobile-menu-trigger">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </header>






















