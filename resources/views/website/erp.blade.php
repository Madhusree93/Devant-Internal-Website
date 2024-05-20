@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 erpmanagement_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 ERP
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
   
   <!-- ======================================erp area section================================= --> 
       <div class="container">
       	   <div class="row">
       	   	   <div class="col-lg-12 documentmanage_outsection">
       	   	   	    <div class="row">
       	   	   	    	  <div class="col-lg-6">
       	   	   	    	  	 <div class="documentleftimg_outarea">
       	   	   	    	  	 	   <img src="{{asset('public/website')}}/assets/images/erp-managementsystem.jpg" class="fdmsimg_design">
       	   	   	    	  	 </div>
       	   	   	    	  </div>
       	   	   	    	  <div class="col-lg-6">
       	   	   	    	  	 <div class="documentrightcontent_outarea">
       	   	   	    	  	 	   <h1 class="docxtext_design">
       	   	   	    	  	 	   	ERP
       	   	   	    	  	 	   </h1>
       	   	   	    	  	 	   <p class="umio_textdesign">
       	   	   	    	  	 	   	Advanced reporting and analytics capabilities are frequently found in ERP applications of Devant. Hospital administrators may learn a lot from these tools about key performance indicators, patient outcomes, resource use, and financial measures. It becomes easier to make decisions based on data, which facilitates strategic planning and ongoing development.
       	   	   	    	  	 	   </p>
       	   	   	    	  	 	   <p class="umio_textdesign">
       	   	   	    	  	 	   	Coordinating various providers, legacy ERP systems, IT-enabled services, and cloud hyperscaling makes managing large business transformations on the cloud challenging. A multi-cloud landscape necessitates new or extra cross-cloud enabled methods for security, controls, monitoring, governance, people, and tools on a single platform, which further adds to this complexity.
       	   	   	    	  	 	   </p>
       	   	   	    	  	 	   <p class="umio_textdesign">
       	   	   	    	  	 	   	Usha Martin's Permission Management System empowers organizations to have full control over user access and permissions. Our comprehensive solution allows you to define and manage user privileges, ensuring data security and confidentiality. With role-based access controls, activity tracking, and customizable permission settings, Usha Martin's Permission Management System provides a robust security framework tailored to your organization's needs. Safeguard your sensitive data, prevent unauthorized access, and maintain compliance with Usha Martin's powerful Permission Management System.
       	   	   	    	  	 	   </p>
       	   	   	    	  	 </div>
       	   	   	    	  </div>
       	   	   	    </div>
       	   	   </div>
       	   </div>
       </div>
   <!-- ======================================erp area section================================== -->

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection