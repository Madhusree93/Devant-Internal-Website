@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 documentmanagement_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 USHA MARTIN
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
   
   <!-- =================================document management area section====================== --> 
       <div class="container">
       	   <div class="row">
       	   	   <div class="col-lg-12 documentmanage_outsection">
       	   	   	    <div class="row">
       	   	   	    	  <div class="col-lg-6">
       	   	   	    	  	 <div class="documentleftimg_outarea">
       	   	   	    	  	 	   <img src="{{asset('public/website')}}/assets/images/document-managementsystem.jpg" class="fdmsimg_design">
       	   	   	    	  	 </div>
       	   	   	    	  </div>
       	   	   	    	  <div class="col-lg-6">
       	   	   	    	  	 <div class="documentrightcontent_outarea">
       	   	   	    	  	 	   <h1 class="docxtext_design">
       	   	   	    	  	 	   	USHA MARTIN
       	   	   	    	  	 	   </h1>
       	   	   	    	  	 	   <p class="umio_textdesign">
       	   	   	    	  	 	   	Usha Martin is one of the top producers of wire rope in the world. DMS & PMS products have been used, and there are two types of users: contributors and read-only. Contributors imply that the user has full access to deleting and editing, while read-only users do not have full access and can only read.
       	   	   	    	  	 	   </p>
       	   	   	    	  	 	   <p class="umio_textdesign">
       	   	   	    	  	 	   	Our robust and user-friendly platform offers seamless document collaboration, version control, and advanced search capabilities. Streamline your workflows, enhance productivity, and ensure regulatory compliance with Usha Martin's DMS. Experience secure, centralized document management that drives efficiency and accelerates your business growth.
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
   <!-- =================================document management area section======================= -->

   <!-- ==============================footer section========================================== -->
   @endsection
@section('footer')

@include('website.include.footer')

@endsection