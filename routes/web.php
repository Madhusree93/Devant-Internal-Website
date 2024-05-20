<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',[WebsiteController::class,'index'])->name('index');
Route::get('/android_app_development',[WebsiteController::class,'android_app_development'])->name('android_app_development');
Route::get('/app_store_optimization',[WebsiteController::class,'app_store_optimization'])->name('app_store_optimization');
Route::get('/mobile_game_development',[WebsiteController::class,'mobile_game_development'])->name('mobile_game_development');
Route::get('/ios_app_development',[WebsiteController::class,'ios_app_development'])->name('ios_app_development');
Route::get('/associate',[WebsiteController::class,'associate'])->name('associate');
Route::get('/blog_details/{id?}',[WebsiteController::class,'blog_details'])->name('blog_details');
Route::get('/blog_list',[WebsiteController::class,'blog_list'])->name('blog_list');
Route::get('/brochure_designing',[WebsiteController::class,'brochure_designing'])->name('brochure_designing');
Route::get('/logo_corporate_id_design',[WebsiteController::class,'logo_corporate_id_design'])->name('logo_corporate_id_design');
Route::get('/animated_video',[WebsiteController::class,'animated_video'])->name('animated_video');
Route::get('/graphic_infographic',[WebsiteController::class,'graphic_infographic'])->name('graphic_infographic');
Route::get('/illustration',[WebsiteController::class,'illustration'])->name('illustration');
Route::get('/powerpoint_design',[WebsiteController::class,'powerpoint_design'])->name('powerpoint_design');
Route::get('/print_media',[WebsiteController::class,'print_media'])->name('print_media');
Route::get('/canada_career',[WebsiteController::class,'canada_career'])->name('canada_career');
Route::get('/canada_career_details/{id?}',[WebsiteController::class,'canada_career_details'])->name('canada_career_details');
Route::post('/save_career_details',[WebsiteController::class,'save_career_details'])->name('save_career_details');
Route::get('/india_career_details/{id?}',[WebsiteController::class,'india_career_details'])->name('india_career_details');
Route::get('/contact_us',[WebsiteController::class,'contact_us'])->name('contact_us');
Route::post('/save_contact_us',[WebsiteController::class,'save_contact_us'])->name('save_contact_us');
// Route::get('/content_management_service',[WebsiteController::class,'content_management_service'])->name('content_management_service');
// Route::get('/ecommerce_website_development',[WebsiteController::class,'ecommerce_website_development'])->name('ecommerce_website_development');
// Route::get('/api_development',[WebsiteController::class,'api_development'])->name('api_development');
// Route::get('/website_design',[WebsiteController::class,'website_design'])->name('website_design');
Route::get('/corporate_social_responsibility',[WebsiteController::class,'corporate_social_responsibility'])->name('corporate_social_responsibility');
Route::get('/corporate_sustainability',[WebsiteController::class,'corporate_sustainability'])->name('corporate_sustainability');
Route::get('/customer_stories',[WebsiteController::class,'customer_stories'])->name('customer_stories');
Route::get('/documentmanagement_system',[WebsiteController::class,'documentmanagement_system'])->name('documentmanagement_system');
Route::get('/erp',[WebsiteController::class,'erp'])->name('erp');
Route::get('/india_career',[WebsiteController::class,'india_career'])->name('india_career');
Route::get('/leadership',[WebsiteController::class,'leadership'])->name('leadership');
Route::get('/service_list',[WebsiteController::class,'service_list'])->name('service_list');
Route::get('/social_media_marketing',[WebsiteController::class,'social_media_marketing'])->name('social_media_marketing');
Route::get('/social_media_optimization',[WebsiteController::class,'social_media_optimization'])->name('social_media_optimization');
Route::get('/email_marketing',[WebsiteController::class,'email_marketing'])->name('email_marketing');
Route::get('/content_marketing',[WebsiteController::class,'content_marketing'])->name('content_marketing');
Route::get('/search_engine_optimization',[WebsiteController::class,'search_engine_optimization'])->name('search_engine_optimization');
Route::get('/the_devant_way',[WebsiteController::class,'the_devant_way'])->name('the_devant_way');
Route::get('/thankyou',[WebsiteController::class,'thankyou'])->name('thankyou');
Route::get('/thankyou2',[WebsiteController::class,'thankyou2'])->name('thankyou2');
Route::get('/best-web-development-company-in-india',[WebsiteController::class,'web_development'])->name('best-web-development-company-in-india');
Route::get('/best-digital-marketing-service-in-india',[WebsiteController::class,'digital_marketing'])->name('best-digital-marketing-service-in-india');
Route::get('/best-mobile-app-development-company-in-india',[WebsiteController::class,'mobile_app_development'])->name('best-mobile-app-development-company-in-india');
Route::get('/top-graphics-design-agency-in-india',[WebsiteController::class,'graphics_design'])->name('top-graphics-design-agency-in-india');
Route::get('/learning_management_system',[WebsiteController::class,'learning_management_system'])->name('learning_management_system');
Route::get('/ai_cloud',[WebsiteController::class,'ai_cloud'])->name('ai_cloud');
Route::get('/hospital_management_system',[WebsiteController::class,'hospital_management_system'])->name('hospital_management_system');
Route::get('/cybersecurity',[WebsiteController::class,'cybersecurity'])->name('cybersecurity');
Route::get('/future_of_work',[WebsiteController::class,'future_of_work'])->name('future_of_work');
Route::get('/blockchain',[WebsiteController::class,'blockchain'])->name('blockchain');
Route::post('/save_email',[WebsiteController::class,'save_email'])->name('save_email');
Route::get('/service_subcategory/{slug?}',[WebsiteController::class,'service_subcategory'])->name('service_subcategory');
Route::get('/digital_service_subcategory/{slug?}',[WebsiteController::class,'digital_service_subcategory'])->name('digital_service_subcategory');
Route::get('/mobile_service_subcategory/{slug?}',[WebsiteController::class,'mobile_service_subcategory'])->name('mobile_service_subcategory');
Route::get('/graphic_service_subcategory/{slug?}',[WebsiteController::class,'graphic_service_subcategory'])->name('graphic_service_subcategory');
Route::get('/custweb_developmentserviceom_website',[WebsiteController::class,'custom_website'])->name('custom_website');
Route::get('/web_developmentservice',[WebsiteController::class,'web_developmentservice'])->name('web_developmentservice');
Route::get('/mobile_appdevelopmentservice',[WebsiteController::class,'mobile_appdevelopmentservice'])->name('mobile_appdevelopmentservice');
Route::get('/video_animationservice',[WebsiteController::class,'video_animationservice'])->name('video_animationservice');
Route::get('/digital_marketingservice',[WebsiteController::class,'digital_marketingservice'])->name('digital_marketingservice');
Route::get('/graphice_designservice',[WebsiteController::class,'graphice_designservice'])->name('graphice_designservice');