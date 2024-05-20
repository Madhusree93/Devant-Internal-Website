@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 leadership_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
        	 	   	   	  	  	   	 LEADERSHIP
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
																	<li><a href="{{route('index')}}">Home</a></li>
																	<li>Committed To Creating Meaningful Change</li>
																</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- =================================leadership area section=============================== --> 
        <section class="koutleader_outsection">
        	<ul class="list-members">
            <li class="member">
					    <div class="member-image">
					      <img src="{{asset('public/website')}}/assets/images/team-memeber1.jpg" class="jteam_memeberdesign">
					    </div>
					    <div class="member-info">
					      <h3>Saptarshi Das</h3>
					      <p>CHIEF ADVISOR</p>
					      <div class="social-link">
					        <i class="fab fa-brands fa-facebook-f"></i>
					        <i class="fab fa-brands fa-x-twitter"></i>
					        <i class="fab fa-brands fa-linkedin-in"></i>
					      </div>
					    </div>
            </li>
            <li class="member">
					    <div class="member-image">
					      <img src="{{asset('public/website')}}/assets/images/team-memeber2.jpg" class="jteam_memeberdesign">
					    </div>
					    <div class="member-info">
					      <h3>Manjistha Roy</h3>
					      <p>CHIEF CONSULTANT</p>
					      <div class="social-link">
					        <i class="fab fa-brands fa-facebook-f"></i>
					        <i class="fab fa-brands fa-x-twitter"></i>
					        <i class="fab fa-brands fa-linkedin-in"></i>
					      </div>
					    </div>
            </li>
            <li class="member">
					    <div class="member-image">
					      <img src="{{asset('public/website')}}/assets/images/team-memeber3.jpg" class="jteam_memeberdesign">
					    </div>
					    <div class="member-info">
					      <h3>Himadri Roy</h3>
					      <p>CHIEF FUNCTIONAL ADVISOR</p>
					      <div class="social-link">
					        <i class="fab fa-brands fa-facebook-f"></i>
					        <i class="fab fa-brands fa-x-twitter"></i>
					        <i class="fab fa-brands fa-linkedin-in"></i>
					      </div>
					    </div>
            </li>
            <li class="member">
					    <div class="member-image">
					      <img src="{{asset('public/website')}}/assets/images/team-memeber4.jpg" class="jteam_memeberdesign">
					    </div>
					    <div class="member-info">
					      <h3>Partha Sarathi Majumdar</h3>
					      <p>CHIEF FINANCIAL ADVISER</p>
					      <div class="social-link">
					        <i class="fab fa-brands fa-facebook-f"></i>
					        <i class="fab fa-brands fa-x-twitter"></i>
					        <i class="fab fa-brands fa-linkedin-in"></i>
					      </div>
					    </div>
            </li>
          </ul>
        </section>
   <!-- =================================leadership area section================================ -->

   <!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection