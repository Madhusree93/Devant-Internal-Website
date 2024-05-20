@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
<!-- ==================================nav bar============================================= -->

<!-- ==================================breadcum section====================================== -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 careerdtlsout_loutbackground">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 breadcumtext_outarea">
						<h1 class="connectus_outarea">
							Career
						</h1>
						<ul class="breadcum_linktextarea">
							<li><a href="{{route('index')}}">Home</a></li>
							<li>Define Your Career With Devant</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ==================================breadcum section====================================== -->

<!-- ==================================career details area section=========================== -->
@if($errors->any())
	  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>{{$errors->first()}}</strong> 
</div>
  @endif
<section class="ocareer_dtlsoutarea">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 carerdetails_outsection">
				<div class="row">
					<h4>Application for {{$career_details->title}}</h4>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="leftcarerdtls_outsectionzx">
							<img src="{{asset('public/website')}}/assets/images/leftcarerdtls_outsectionzx.png" class="ijnimg_design">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="rightcarerdtls_outsectionzx">
						<form method='post' action="{{route('save_career_details')}}">
							@csrf
							<input type="hidden" name="country" value="{{$career_details->country}}" >
							<input type="hidden" name="application_name" value="{{$career_details->title}}" >
							<div class="row">
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="name" id="name" autocomplete="off" required value="{{old('name')}}">
										<label for="name">YOUR NAME*</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-item">
										<input type="email" name="email" id="ycemail" autocomplete="off" required value="{{old('email')}}">
										<label for="ycemail">YOUR EMAIL*</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="phone" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" id="cnumber" autocomplete="off" required value="{{old('phone')}}">
										<label for="cnumber">YOUR PHONE NO*</label>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="address" id="adressy" autocomplete="off" required value="{{old('address')}}">
										<label for="adressy">YOUR ADDRESS</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">
										<input type="file" name="cv" id="cufile" autocomplete="off" required class="kfldfrom_area" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">
										<input type="text" name="message" id="ymessage" autocomplete="off" required class="ymsg_fldarea" value="{{old('message')}}">
										<label for="ymessage">YOUR MESSAGE</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">{!!captcha_img('math')!!} <input type="text" name="captcha" required>
									@if($errors->has('captcha'))
            						<span class="text-danger">
                					<strong>{{$errors->first('captcha')}}</strong>
           							</span>
            						@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 hsubmitbtn_outarea">
									<button class="blob-btn">
										APPLY NOW
										<span class="blob-btn__inner">
											<span class="blob-btn__blobs">
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
											</span>
										</span>
									</button>
									<br>
									<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="qgap_outarea">
										<defs>
											<filter id="goo">
												<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
												<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
												<feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
											</filter>
										</defs>
									</svg>
								</div>
							</div>
                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 job_descriptionoutarea">
				<h1 class="wdgner_textdesign">{{$career_details->designation}}</h1>
				<p class="jobdsadrestext_design">
					{{$career_details->company_address}}
				</p>
				<h1 class="wdgner_textdesign ogap_jdescription">Key Skills :</h1>
				<p class="jobdsadrestext_design jexgap_areadesign">
				{{$career_details->skill}}
				</p>
				<h1 class="wdgner_textdesign ogap_jdescription">Job Description:</h1>
				<p class="jobdsadrestext_design jexgap_areadesign">
					{!!$career_details->details!!}
				</p>
			</div>
		</div>
	</div>
</section>
<!-- ==================================career details area section============================ -->

<!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection