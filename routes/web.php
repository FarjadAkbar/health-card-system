<?php

use Illuminate\Support\Facades\Route;
use App\Attachment;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\FileDoctorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\PackageTypeController;
use App\Http\Controllers\AllCardController;
use App\Http\Controllers\CardProfile;
use App\Http\Controllers\HospitalDirectoryController;
use App\Http\Controllers\ApplyCardController;
use App\Http\Controllers\SearchCardController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\HospitalContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MailTemplateController;

use App\GeneralInfo;

use App\Card;




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

Route::get('testing_sms/{phone}/{message}',[CardProfile::class,'sendSms']);

Route::get('/', function () {
    return view('auth.login');
});

// livewire
Route::get('/m',function (){
    return view('aboutus');
});


  
   
//Hospitals Route
Route::get('hospital/{id}',[HospitalController::class,'index'])->name('show');
Route::post('hospital/add',[HospitalController::class,'store'])->name('hospital_add');
Route::post('hospital/edit',[HospitalController::class,'update'])->name('hospital_edit');
Route::post('hospital/delete',[HospitalController::class,'destroy'])->name('hospital_delete');
Route::post('hospital/delete/all',[HospitalController::class,'hospital_delete_checked'])->name('delete_all');
Route::post('hospital/edit_status',[HospitalController::class,'edit_status'])->name('edit_status');
Route::post('hospital/edit_status_online',[HospitalController::class,'edit_status_online'])->name('edit_status_online');
Route::get('profile_hospital/{id}',[HospitalController::class,'index_profile'])->name('hospital_profile');
Route::post('hospital/import',[HospitalController::class,'importHospital'])->name('hospital_import');
Route::post('services/import',[HospitalController::class,'importServices'])->name('services_import');
Route::get('provider_all/{status?}',[HospitalController::class,'provider_draft'])->name('provider_all');
Route::get('provider_all_online/{status?}',[HospitalController::class,'provider_online'])->name('provider_all_online');
Route::get('provider_all_on/{status?}',[HospitalController::class,'provider_on'])->name('provider_all_on');
Route::get('provider_all_expired/{status?}',[HospitalController::class,'provider_expired'])->name('provider_all_expired');





//Services Route
Route::post('service_add',[ServiceController::class,'store'])->name('service_add');
Route::post('service_delete',[ServiceController::class,'destroy'])->name('service_delete');
Route::post('service_edit',[ServiceController::class,'update'])->name('service_edit');



//Attachments Route
Route::post('/save_attachment',[AttachmentController::class,'store'])->name('save_attachment');
Route::post('/delete_attachment',[AttachmentController::class,'destroy'])->name('delete_attachment');
Route::post('/save_attachment_gallery',[AttachmentController::class,'gallery'])->name('save_attachment_gallery');


//Hospital contact
Route::post('/add_hospital_contact',[HospitalContactController::class,'store'])->name('add.hospital.contact');
Route::post('/delete_hospital_contact',[HospitalContactController::class,'destroy'])->name('delete.hospital.contact');
Route::post('/edit_hospital_contact',[HospitalContactController::class,'update'])->name('update.hospital.contact');



//Contract Route
Route::post('/save_contract',[ContractController::class,'store'])->name('save_contract');
Route::post('/delete_contract',[ContractController::class,'destroy'])->name('delete_contract');



//DoctorList Route
Route::post('/save_list',[FileDoctorController::class,'store'])->name('save_list');
Route::post('/delete_list',[FileDoctorController::class,'destroy'])->name('delete_list');
Route::get('/View_file/{id}/{name}',[FileDoctorController::class,'open_file']);


//partner
Route::get('partner/all',[PartnerController::class,'show'])->name('partner.all.dashboard');
Route::post('partner/delete',[PartnerController::class,'destroy'])->name('partner.all.delete');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    
    Route::get('/mails/all', [MailController::class, 'AllMails']);
    Route::get('/mails/new', [MailController::class, 'NewMail']);
    Route::post('/mails/new/save', [MailController::class, 'SaveMail']);
    Route::delete('/mails/delete', [MailController::class, 'DeleteMail']);
    Route::get('/mails/view/{id}', [MailController::class, 'ViewMail']);

    Route::get('/card_type/customers/{type}', [MailController::class, 'GetCustomers']);

    Route::resource('templates','MailTemplateController');


});
    

//Categories Route
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::post('/category_add',[CategoryController::class,'store'])->name('category_add');
Route::post('/category_delete',[CategoryController::class,'destroy'])->name('category_delete');
Route::post('/category_edit',[CategoryController::class,'update'])->name('category_edit');
Route::post('/category_import',[CategoryController::class,'importCategory'])->name('category_import');


//CardType Route
Route::get('card/type',[CardTypeController::class,'index'])->name('show_cardType');
Route::post('card/type/add',[CardTypeController::class,'store'])->name('show_cardType_add');
Route::post('card/type/update',[CardTypeController::class,'update'])->name('show_cardType_update');
Route::post('card/type/delete',[CardTypeController::class,'destroy'])->name('show_cardType_delete');

//PackageType Route
Route::get('card/Package',[PackageTypeController::class,'index'])->name('show_PackageType');
Route::post('card/Package/add',[PackageTypeController::class,'store'])->name('show_PackageType_add');
Route::post('card/Package/edit',[PackageTypeController::class,'update'])->name('show_PackageType_edit');
Route::post('card/Package/delete',[PackageTypeController::class,'destroy'])->name('show_PackageType_delete');
Route::post('card/Package/edit_staff',[PackageTypeController::class,'edit_staff'])->name('show_PackageType_edit_staff');



//AddCard Route
Route::get('add_cards',[CardController::class,'index'])->name('add_cards');
Route::get('add_group_cards',[CardController::class,'add_group_cards'])->name('add_group_cards');
Route::post('add_cards_user',[CardController::class,'store'])->name('add_cards_user');
Route::post('add_cards_user_more',[CardController::class,'store_more'])->name('add_cards_user_more');
Route::post('add_cards_user_more_plus',[CardController::class,'store_more_plus'])->name('add_cards_user_more_plus');


//AllCard Route
Route::get('show_cards',[AllCardController::class,'index'])->name('show_cards');
Route::get('show_group_cards',[AllCardController::class,'index_group'])->name('show_group_cards');
Route::get('show_cards_plus',[AllCardController::class,'index_plus'])->name('show_cards_plus');


// Route::get('cards/list',[AllCardController::class,'getCardsData'])->name('cards.list');

Route::get('show_cards_today_sale',[AllCardController::class,'index_today_sale'])->name('show_cards_today_sale');
Route::get('show_cards_group_today_sale',[AllCardController::class,'group_today_sale'])->name('show_cards_group_today_sale');

Route::get('show_cards_draft/{status?}',[AllCardController::class,'index_draft'])->name('show_cards_draft');
Route::get('show_company_cards_draft/{status?}',[AllCardController::class,'group_draft'])->name('show_company_cards_draft');
Route::get('show_plus_draft/{status?}',[AllCardController::class,'plus_draft'])->name('show_plus_draft');


Route::post('delete/card',[AllCardController::class,'destroy'])->name('delete_card');
Route::post('status/card/update',[AllCardController::class,'update'])->name('update_status');
Route::post('card/import/customer',[AllCardController::class,'importCustomer'])->name('card_customer_import');
Route::post('card/import/company',[AllCardController::class,'importCompany'])->name('card_company_import');



Route::get('package/{id}',[CardController::class,'getproducts']);
Route::post('delete/card/plus',[AllCardController::class,'destroy_plus'])->name('delete_card_plus');
Route::post('status/card/update/plus',[AllCardController::class,'update_plus'])->name('update_status_plus');






//ProfileCard Route
Route::get('/profile/{id}',[CardProfile::class,'index'])->name('profile_show');
Route::get('/profile_plus/{id}',[CardProfile::class,'index_plus'])->name('profile_show_plus');

Route::post('/profile/edit',[CardProfile::class,'update'])->name('profile_update');
Route::post('/profile/edit/plus',[CardProfile::class,'update_plus'])->name('profile_update_plus');
Route::get('/profile/invoice/{id}',[CardProfile::class,'invoice_index'])->name('profile_invoice_show');
Route::get('/profile/invoice/plus/{id}',[CardProfile::class,'all_invoice_index_plus'])->name('profile_invoice_show_all_plus');
Route::get('/profile/invoice/{id}',[CardProfile::class,'invoice_index_print'])->name('invoice_index_print');
Route::get('/profile/Plus/{id}',[CardProfile::class,'invoice_index_print_plus'])->name('invoice_index_print_plus');
Route::get('/profile/invoice/specific/{id}/{id2}',[CardProfile::class,'specific_invoice_index'])->name('profile_invoice_show_specific');

Route::post('/profile/invoice/all/{id}',[CardProfile::class,'all_invoice_index'])->name('profile_invoice_show_all');

// Send
Route::post('/profile/message',[CardProfile::class,'profile_message'])->name('profile_message');

Route::get('/export-pdf', [CardProfile::class, 'exportPdf'])->name('pdf');
Route::get('/single/card/{id}/{id2}', [CardProfile::class, 'printToPDF'])->name('single_card');
Route::get('/single/card/plus/{id}/{id2}', [CardProfile::class, 'printToPDF_plus'])->name('single_card_plus');
Route::get('/single/card/invoices/{id}', [CardProfile::class, 'printToPDF_invoices'])->name('single_invoice_pdf');





//ajax update
Route::get('profile/package_prices/{id}/{id2}',[CardProfile::class,'package_prices'])->name('package.prices.profile');
Route::get('profile/package_prices_plus/{id}/{id2}',[CardProfile::class,'package_prices_plus'])->name('package.prices.profile.plus');
Route::get('profile/package_name/{id}/{id2}',[CardProfile::class,'package_name'])->name('package.prices.name');
Route::get('profile/package_name_plus/{id}/{id2}',[CardProfile::class,'package_name_plus'])->name('package.prices.name.plus');
Route::get('profile/balance/{id}/{id2}',[CardProfile::class,'balance'])->name('package.prices.balance');
Route::get('profile/balance_plus/{id}/{id2}',[CardProfile::class,'balance_plus'])->name('package.prices.balance');
Route::get('profile/delivery/{id}/{id2}/{id3}',[CardProfile::class,'delivery'])->name('package.prices.delivery');
Route::get('profile/delivery_plus/{id}/{id2}/{id3}',[CardProfile::class,'delivery_plus'])->name('package.prices.delivery.plus');
Route::get('profile/editPackagePrice/{id}/{id2}',[CardProfile::class,'editPackagePrice'])->name('package.prices.editPackagePrice');
Route::get('profile/editPackagePrice_plus/{id}/{id2}',[CardProfile::class,'editPackagePricePlus'])->name('package.prices.editPackagePrice.plus');

// Profile 

//Report Data
Route::get('card_report',[reportController::class,'index'])->name('report.card');
Route::post('card_report',[reportController::class,'reportCard'])->name('report.card.search');
Route::get('agent_customer',[reportController::class,'agentcustomer'])->name('report.agent_customer');
//Home Slider
Route::get('/home_slider',[\App\Http\Controllers\HomeController::class,'home_slider'])->name('home.slider');
Route::post('/home_slider_add',[\App\Http\Controllers\HomeController::class,'slider_store'])->name('home.slider.store');
Route::post('/home_slider_delete',[\App\Http\Controllers\HomeController::class,'destroy'])->name('home.slider.delete');
Route::get('provider_report',[reportController::class,'provider_index'])->name('report.provider_report');
Route::post('provider_report_search',[reportController::class,'reportprovider'])->name('report.provider_report_search');

Route::get('/company_info',[\App\Http\Controllers\GeneralInfoController::class,'index'])->name('setting.company_info');
Route::post('/company_info',[\App\Http\Controllers\GeneralInfoController::class,'store'])->name('setting.company_info');

//Providers
Route::get('category/provider',[ProviderController::class,'index'])->name('category.provider');
Route::post('category/provider/add',[ProviderController::class,'store'])->name('category.provider.add');
Route::post('category/provider/edit',[ProviderController::class,'update'])->name('category.provider.edit');
Route::post('category/provider/delete',[ProviderController::class,'destroy'])->name('category.provider.delete');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});


//Localization
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', function()
    {
        $sliders = Attachment::where('hospital_id',null)->get();
        return view('home_main', compact('sliders'));
    })->name('home_page');
    
     Route::get('/health-card', function()
    {
        return View::make('home');
    })->name('health.page');
    
        // index - mobile
        Route::get('home_mobile',function (){
           return view('index-mobile_main');
        });
        
          Route::get('home_mobile_health',function (){
        return view('index-mobile');
    })->name('index-mobile');
    
     Route::get('home_mobile_plus',function (){
        return view('index-mobile-plus');
    })->name('index-mobile-plus');
    // Hospital Directory
    Route::get('hospital/directory',[HospitalDirectoryController::class,'index'])->name('hospital.directory');
        Route::get('hospital/directory/plus/{id}',[HospitalDirectoryController::class,'index_hospital'])->name('hospital.directory.all.plus');

    Route::get('hospital/category/{id}',[HospitalDirectoryController::class,'hospital_category'])->name('hospital.category.show');
    Route::get('hospital/directory/search',[HospitalDirectoryController::class,'hospital_search_page'])->name('hospital.directory.search');
    Route::post('hospital/directory/search',[HospitalDirectoryController::class,'hospital_search'])->name('hospital.directory.search');
    Route::post('hospital/directory/search/mobile',[HospitalDirectoryController::class,'hospital_search_phone'])->name('hospital.directory.search.mobile');
        Route::get('hospital/hospital_mobile',[HospitalDirectoryController::class,'index2']);
         Route::get('hospital/directory/plus',[HospitalDirectoryController::class,'index_plus_view'])->name('hospital.directory.plus');
             Route::get('hospital/directory/plus/{id}',[HospitalDirectoryController::class,'index_hospital'])->name('hospital.directory.all.plus');
             
               // be-Partner
        Route::get('/be_partner',[PartnerController::class,'index'])->name('be_partner_apply');
        Route::post('/be_partner_add',[PartnerController::class,'store'])->name('be_partner_add');


    //search ajax
    Route::get('/typeahead_autocomplete/action', [HospitalDirectoryController::class, 'action'])->name('typeahead_autocomplete.action');
    //Hospital Profile
    Route::get('hospital/directory/profile/{id}',[HospitalDirectoryController::class,'hospital_profile'])->name('hospital.directory.profile');
       

    // Apply Card
    Route::get('/apply/{id?}',[ApplyCardController::class,'index'])->name('apply.view')->where('id', '[0-9]+');
        Route::get('apply_plus/{id?}',[ApplyCardController::class,'index_plus'])->name('apply.view.plus')->where('id', '[0-9]+');
            Route::post('public/apply/add/plus',[ApplyCardController::class,'store_plus'])->name('apply.add.plus');
    Route::post('save/apply/add/plus',[ApplyCardController::class,'store_plus'])->name('apply.add.plus');


    Route::get('/apply_mobile/{id?}',[ApplyCardController::class,'index2'])->name('apply.view.mobile')->where('id', '[0-9]+');
    Route::post('public_add_card',[ApplyCardController::class,'store'])->name('apply.add');
    // Search Card
    Route::get('/check',[SearchCardController::class,'index'])->name('search.card');
    Route::get('public_search_card/cpr',[SearchCardController::class,'index'])->name('search.card');
    
    
    Route::post('public_search_card/cpr',[SearchCardController::class,'search'])->name('search.card.cpr');
    Route::get('/about-us',function (){
        return view('aboutus');
    })->name('about-us');
    Route::get('/contact-us',function (){
        $general_info = GeneralInfo::first();
        return view('contact-us', compact('general_info'));
    })->name('contact-us');
    Route::get('/services',function (){
        return view('services');
    })->name('services.home');
    // Read All Notification  Card
        Route::get('read_all_notification',[ApplyCardController::class,'readAllNotification'])->name('read.all.notification');
       
});


Auth::routes();
Route::get('/dashboard/login', 'HomeController@index')->name('index');
Route::get('/{page}', 'AdminController@index');




// Testing Route

// Route::get('/single/card/test', function(){
    
//         $desin = 1;

        
//         $card_father = Card::where('father_id', '6001124662')->get();
//         $card = Card::where('cpr_no', '6001124662')->first();

        
//     return view('cards.single_card', compact('card', 'desin', 'card_father'));
// });
