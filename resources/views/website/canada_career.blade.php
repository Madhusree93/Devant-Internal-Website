@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 careerout_loutbackground">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 Career
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Canada Career</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ==================================canada career area section============================ --> 
        <section class="careerindia_backgroundarea">
       	  <div class="container">
       	  	  <div class="row">
       	  	   	  <div class="col-lg-12 indiacarer_outsectionl">
       	  	   	  	  <div class="row">
       	  	   	  	   	<div class="col-lg-5">
       	  	   	  	   	  <div class="india_leftimgarea">
       	  	   	  	   	  	 	<img src="{{asset('public/website')}}/assets/images/gir-large.png" class="glrg_imgdesign">
       	  	   	  	   	  </div>
       	  	   	  	   	</div>
       	  	   	  	   	<div class="col-lg-7">
       	  	   	  	   		 <div class="india_rightmarea">
       	  	   	  	   		 	   <h2 class="enlef_textdesign">Explore New Life</h2>
       	  	   	  	   		 	   <p class="efel_textdesign">
       	  	   	  	   		 	   	Don’t just find. be found put your CV in front of great employers
       	  	   	  	   		 	   </p>
       	  	   	  	   		 	   <p class="efel_textdesign1">
       	  	   	  	   		 	   	We are invested in our people for the long term, supporting them to imagine and build towards the meaningful careers they aspire to. We support the development of our people, providing them with opportunities and tools for them to continuously develop and reinvent their skills and careers, so they remain at the cutting edge of innovation.
       	  	   	  	   		 	   </p>
       	  	   	  	   		 	   <p class="efel_textdesign1">
       	  	   	  	   		 	   	We are invested in our people for the long term, supporting them to imagine and build towards the meaningful careers they aspire to. We support the development of our people, providing them with opportunities and tools for them to continuously develop and reinvent their skills and careers, so they remain at the cutting edge of innovation.
       	  	   	  	   		 	   </p>
       	  	   	  	   		 </div>
       	  	   	  	   	</div>
       	  	   	  	  </div>
       	  	   	  </div>
       	  	  </div>
       	  </div>
        </section>

        <div class="container">
        	  <div class="row">
        	  	<div class="col-lg-12 careershow_dtlsoutarea">
        	  	 	  <h6 class="ltestjob_textdesign">Latest Job</h6>
        	  	 	  <h1 class="klxc_jobfertextdesign">New Job Offer</h1>
        	  	 	  <div class="row">
					  @if(isset($canadacareers))
            	      @foreach($canadacareers as $list)
                      @php
                      $jobData = json_decode($list->logo);
                      $joblogo = isset($jobData[0]->download_link) ? $jobData[0]->download_link : '';
                      @endphp
						 <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">{{@$list->date->format('d/m/Y')}}</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">{{@$list->type}}</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('storage/app/public/'.$joblogo)}}" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">{{@$list->title}}</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">{{@$list->designation}}</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
										  {!!@$list->details!!}
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="{{route('canada_career_details')}}/{{@$list->id}}">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">{{@$list->salary}}</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
						</div>
							@endforeach
                            @endif





        	  	 	  	  <!-- <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">2 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/google-g.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Google , New York</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">Sr. Product Designer</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div>
        	  	 	  	  <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">1 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/microsoft.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Microsoft , California</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">Web Designer</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="career-details.html">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div>
        	  	 	  	  <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">2 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/amazon.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Amazon , Southfield</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">IT Management</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="career-details.html">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div>
        	  	 	  	   <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">2 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/github.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Github , Southfield</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">Sr. Product Designer</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="career-details.html">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div>
        	  	 	  	  <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">1 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/dropbox.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Dropbox , New York</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">Web Designer</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="career-details.html">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div>
        	  	 	  	  <div class="col-lg-4">
        	  	 	  	  	 <div class="singlejob_outarea">
        	  	 	  	  	 	  <div class="otop_inneroutarea">
        	  	 	  	  	 	  	<span class="pstdate_textdesign">2 Day ago</span>
        	  	 	  	  	 	  	<a href="#" class="fhlftime_textdesign">FULL TIME</a>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	   	  <div class="col-lg-3">
        	  	 	  	  	 	   	   	  <div class="jsingle_leftoutarea">
        	  	 	  	  	 	   	   	  	<img src="{{asset('public/website')}}/assets/images/adobe.png" class="jobicon_design">
        	  	 	  	  	 	   	   	  </div>
        	  	 	  	  	 	   	  </div>
        	  	 	  	  	 	   	  <div class="col-lg-9">
						        	  	 	  	  	<div class="singlejob_rghtoutarea">
						        	  	 	  	  		 <h1 class="location_nmetext">Adobe , California</h1>
						        	  	 	  	  		 <h2 class="dsgntext_joblistarea">IT Management</h2>
						        	  	 	  	  	</div>
        	  	 	  	            </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 	  <p class="jobdscrptn_potext">
        	  	 	  	  	 	  	It is a long established fact that a reader of a page when looking at its layout.
        	  	 	  	  	 	  </p>
        	  	 	  	  	 	  <div class="row">
        	  	 	  	  	 	  	 <div class="col-lg-7">
        	  	 	  	  	 	  	 	   <div class="aplynow_btnoutarea">
        	  	 	  	  	 	  	 	   	    <button class="anwrgt_btnarea">
        	  	 	  	  	 	  	 	   	    	<a href="career-details.html">
        	  	 	  	  	 	  	 	   	    	  Apply Now
        	  	 	  	  	 	  	 	   	    	  <i class="fa-solid fa-right-long adnwrgbtn_design"></i>
        	  	 	  	  	 	  	 	   	    	</a>
        	  	 	  	  	 	  	 	   	    </button>
        	  	 	  	  	 	  	 	   </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  	 <div class="col-lg-5">
        	  	 	  	  	 	  	 	  <div class="kslry_negbloutarea">
        	  	 	  	  	 	  	 	  	  <h2 class="gslerytext">
        	  	 	  	  	 	  	 	  	  	Salary : <span class="gslerytext1">Negotiable</span>
        	  	 	  	  	 	  	 	  	  </h2>
        	  	 	  	  	 	  	 	  </div>
        	  	 	  	  	 	  	 </div>
        	  	 	  	  	 	  </div>
        	  	 	  	  	 </div>
        	  	 	  	  </div> -->
        	  	 	  </div>
        	  	</div>
        	  </div>
        </div>
   <!-- ==================================canada career area section============================= -->  

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection