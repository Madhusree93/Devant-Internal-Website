<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Contact;
use App\IndiaCareer;
use App\CanadaCareer;
use App\Careerdetail;
use App\Subscriber;
use App\ServiceCategory;
use App\ServiceSubcategory;



class WebsiteController extends Controller
{
    public function index()
    {
        $blogs=Blog::orderBy('id', 'DESC')->take('4')->get();
        return view('website.index',compact('blogs'));
    }
    public function android_app_development()
    {
        return view('website.android_app_development');
    }
    public function app_store_optimization()
    {
        return view('website.app_store_optimization');
    }
    public function mobile_game_development()
    {
        return view('website.mobile_game_development');
    }
    public function ios_app_development()
    {
        return view('website.ios_app_development');
    }
    public function associate()
    {
        return view('website.associate');
    }
    public function blog_details($id)
    {
        $blogs_details=Blog::where('id',$id)->first();
        $blogs=Blog::take('3')->get();
        
        return view('website.blog_details',compact('blogs_details','blogs'));
    }
    public function blog_list()
    {
        $blogs=Blog::orderBy('id', 'DESC')->get();
        return view('website.blog_list',compact('blogs'));
    }
    public function brochure_designing()
    {
        return view('website.brochure_designing');
    }
    public function logo_corporate_id_design()
    {
        return view('website.logo_corporate_id_design');
    }
    public function animated_video()
    {
        return view('website.animated_video');
    }
    public function graphic_infographic()
    {
        return view('website.graphic_infographic');
    }
    public function illustration()
    {
        return view('website.illustration');
    }
    public function powerpoint_design()
    {
        return view('website.powerpoint_design');
    }
    public function print_media()
    {
        return view('website.print_media');
    }
    public function india_career()
    {
        $indiacareers=IndiaCareer::get();
        return view('website.india_career',compact('indiacareers'));
    }
    public function canada_career()
    {
        $canadacareers=CanadaCareer::get();
        return view('website.canada_career',compact('canadacareers'));
    }
    public function canada_career_details($id)
    {
        $career_details=CanadaCareer::where('id',$id)->first();
        return view('website.career_details',compact('career_details'));
    }
    public function india_career_details($id)
    {
        $career_details=IndiaCareer::where('id',$id)->first();
        return view('website.career_details',compact('career_details'));
    }
    public function save_career_details(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
        ]);
        $data = $request->all();
        if ($request->hasFile('cv')) {
                $image = $request->file('cv');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('application'), $imageName);
                $data['cv'] = $imageName;
                
            }
           $application= new Careerdetail();
           $userdata=$application->create($data);

           if($userdata)
           return redirect()->route('thankyou2');
           elseif($userdata == 0){
            return Redirect::back()->with('error','Error occured');
         }
           else{
           return redirect()->back()->with('error','Error occured');
           }
    }
    public function contact_us()
    {
        return view('website.contact_us');
    }
    public function save_contact_us(Request $request)
    {
     
        $request->validate([
               'captcha1' => 'required|captcha',
        ]);

        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;

        $contact->created_at=date('Y-m-d H:i:s');
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->deleted_at=date('Y-m-d H:i:s');

        $userdata=$contact->save();
    
        if($userdata)
        return redirect()->route('thankyou');
        elseif($userdata == 0){
           return Redirect::back()->with('error','Error occured');
        }
        else{
        return redirect()->back()->with('error','Error occured');
        }
    }
    // public function content_management_service()
    // {
    //     return view('website.content_management_service');
    // }
    // public function ecommerce_website_development()
    // {
    //     return view('website.ecommerce_website_development');
    // }
    // public function api_development()
    // {
    //     return view('website.api_development');
    // }
    // public function website_design()
    // {
    //     return view('website.website_design');
    // }
    public function corporate_social_responsibility()
    {
        return view('website.corporate_social_responsibility');
    }
    public function corporate_sustainability()
    {
        return view('website.corporate_sustainability');
    }
    public function customer_stories()
    {
        return view('website.customer_stories');
    }
    public function documentmanagement_system()
    {
        return view('website.documentmanagement_system');
    }
    public function erp()
    {
        return view('website.erp');
    }   
    public function leadership()
    {
        return view('website.leadership');
    }
    public function service_list()
    {
        return view('website.service_list');
    }
    // public function social_media_marketing()
    // {
    //     return view('website.social_media_marketing');
    // }
    // public function social_media_optimization()
    // {
    //     return view('website.social_media_optimization');
    // }
    // public function email_marketing()
    // {
    //     return view('website.email_marketing');
    // }
    // public function content_marketing()
    // {
    //     return view('website.content_marketing');
    // }
    // public function search_engine_optimization()
    // {
    //     return view('website.search_engine_optimization');
    // }
    public function the_devant_way()
    {
        return view('website.the_devant_way');
    }
    public function thankyou()
    {
        return view('website.thankyou');
    }
    public function thankyou2()
    {
        return view('website.thankyou2');
    }
    public function web_development()
    {
        return view('website.web_development');
    }
    public function digital_marketing()
    {
        return view('website.digital_marketing');
    }
    public function mobile_app_development()
    {
        return view('website.mobile_app_development');
    }
    public function graphics_design()
    {
        return view('website.graphics_design');
    }
    public function learning_management_system()
    {
        return view('website.learning_management_system');
    }
    public function hospital_management_system()
    {
        return view('website.hospital_management_system');
    }
    public function ai_cloud()
    {
        return view('website.ai_cloud');
    }
    public function cybersecurity()
    {
        return view('website.cybersecurity');
    }
    public function future_of_work()
    {
        return view('website.future_of_work');
    }
    public function blockchain()
    {
        return view('website.blockchain');
    }
    public function save_email(Request $request)
    {
     
        $subscribers=new Subscriber();
        $subscribers->email=$request->email;
       
        $subscribers->created_at=date('Y-m-d H:i:s');
        $subscribers->updated_at=date('Y-m-d H:i:s');
      

        $subscribers->save();
    
        return response()->json(['message'=>'Thank you for contacting us']);

        }
        public function messages()
        {
         return ['captcha.captcha' => 'Invalid captcha values'];
        }
        public function messages1()
        {
         return ['captcha.captcha1' => 'Invalid captcha values'];
        }
              public function service_subcategory($slug)
            {
                $service_subcategory=ServiceSubcategory::where('slug',$slug)->first();          
                return view('website.web_service_subcategory',compact('service_subcategory'));
            }  

            public function digital_service_subcategory($slug)
            {
                $service_subcategory=ServiceSubcategory::where('slug',$slug)->first();          
                return view('website.digital_service_subcategory',compact('service_subcategory'));
            }  
            public function mobile_service_subcategory($slug)
            {
                $service_subcategory=ServiceSubcategory::where('slug',$slug)->first();          
                return view('website.mobile_service_subcategory',compact('service_subcategory'));
            } 
            public function graphic_service_subcategory($slug)
            {
                $service_subcategory=ServiceSubcategory::where('slug',$slug)->first();    
                // dd($service_subcategory->toArray());      
                return view('website.graphic_service_subcategory',compact('service_subcategory'));
            } 

            public function custom_website()
            {
                return view('website.custom_website');
            }
            public function web_developmentservice()
            {
                return view('website.web_developmentservice');
            }
            public function mobile_appdevelopmentservice()
            {
                return view('website.mobile_appdevelopmentservice');
            }
            public function video_animationservice()
            {
                return view('website.video_animationservice');
            }
            public function digital_marketingservice()
            {
                return view('website.digital_marketingservice');
            }
            public function graphice_designservice()
            {
                return view('website.graphice_designservice');
            }
}
