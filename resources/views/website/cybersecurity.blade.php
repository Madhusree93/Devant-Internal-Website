@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
   <!-- ==================================nav bar============================================= -->

   <!-- ==================================breadcum section====================================== -->
      <div class="container-fluid">
        	<div class="row">
        	 	  <div class="col-lg-12 cybersecuritysection_breadcumback">
        	 	   	  <div class="container">
        	 	   	   	  <div class="row">
        	 	   	   	  	  <div class="col-lg-12 breadcumtext_outarea">
        	 	   	   	  	  	    <h1 class="connectus_outarea">
									CYBERSECURITY
        	 	   	   	  	  	    </h1>
        	 	   	   	  	  	    <ul class="breadcum_linktextarea">
										<li><a href="{{route('index')}}">Home</a></li>
									    <li>We Master It Ourselves,
                                            So We Can Do It For You</li>
									</ul>
        	 	   	   	  	  </div>
        	 	   	   	  </div>
        	 	   	  </div>
        	 	  </div>
        	</div>
      </div>
   <!-- ==================================breadcum section====================================== -->
   
   <!-- ===================================cybersecurity area section=========================== -->
    <section class="ddference_backside"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 aicloud_mainoutsection">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="aicloud_leftoutsection">
                                <img src="{{asset('public/website')}}/assets/images/cyber-security1.jpg" class="aiclod_fstimgdesign">
                                <img src="{{asset('public/website')}}/assets/images/cyber-security2.jpg" class="aiclod_scndimgdesign">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="aicloud_rightoutsection">
                                <h1 class="srvcpge_hdngtextdesignacld">
                                    CYBERSECURITY
                                </h1>
                                <p class="cmsetext_designcmsacld">
                                    Comprehensive Protection - At DEVANT, we go beyond traditional cybersecurity measures. Our holistic approach ensures comprehensive protection for your digital assets, networks, and sensitive information, safeguarding your business from evolving threats.
                                </p>
                                <p class="cmsetext_designcmsacld">
                                    24/7 Monitoring and Support - Cyber threats don't sleep, and neither does DEVANT's Security Operations Center (SOC). We provide round-the-clock monitoring, threat detection, and incident response support, giving you peace of mind and minimizing downtime.
                                </p>
                                <p class="cmsetext_designcmsacld">
                                    Cutting-Edge Technologies - Stay ahead of cyber threats with DEVANT's cutting-edge cybersecurity technologies. We leverage advanced tools, machine learning, behavioral analytics, and threat intelligence to proactively detect and mitigate risks.
                                </p>
                                <p class="cmsetext_designcmsacld">
                                    Customized Solutions - We understand that every business has unique cybersecurity needs. DEVANT provides tailored solutions that align with your specific requirements, ensuring a personalized approach to protect your digital ecosystem.
                                </p>
                                <p class="cmsetext_designcmsacld">
                                    Proactive Threat Management - DEVANT takes a proactive stance against cyber threats. Our dedicated team of experts monitors, analyzes, and responds to emerging threats, preventing potential breaches before they occur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 aiclod_downoutsection1">
                            <p class="cmsetext_designcmsacldks">
                                End-to-End Security Services - From risk assessment and security audits to incident response and recovery, DEVANT offers end-to-end security services. We partner with you throughout the cybersecurity lifecycle, ensuring a robust and resilient security posture.
                            </p>
                            <p class="cmsetext_designcmsacldks">
                                Collaborative Approach - We believe in working closely with our clients to build strong partnerships. DEVANT collaborates with your team, providing expert guidance, training, and support to strengthen your cybersecurity posture and enhance your internal capabilities.
                            </p>
                            <p class="cmsetext_designcmsacldks">
                                Compliance and Regulatory Adherence - DEVANT ensures your business meets industry standards and regulatory compliance requirements. Our solutions help you navigate complex data protection and privacy regulations, avoiding penalties and reputational damage.
                            </p>
							<p class="cmsetext_designcmsacldks">
                                24/7 Monitoring and Support - Cyber threats don't sleep, and neither does DEVANT's security operations center (SOC). We provide round-the-clock monitoring, threat detection, and incident response support, giving you peace of mind and minimizing downtime.
                            </p>
							<p class="cmsetext_designcmsacldks">
                                Continuous Learning and Innovation - DEVANT stays at the forefront of cybersecurity by continuously learning and innovating. We keep pace with the latest industry trends, emerging technologies, and threat landscapes, providing you with the most effective solutions.
                            </p>
							<p class="cmsetext_designcmsacldks">
                                Discover the DEVANT difference in cybersecurity. Trust us to protect your business from cyber threats, enhance your security posture, and enable you to focus on what you do best. Contact us today to fortify your digital defenses with confidence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
   <!-- ===================================cybersecurity area section=========================== -->

   <!-- ==============================footer section========================================== -->
    <!-- ==============================footer section========================================== -->
    @endsection
@section('footer')

@include('website.include.footer')

@endsection