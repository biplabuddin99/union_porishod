<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\DashboardController as dash;
use App\Http\Controllers\Settings\UserController as user;
use App\Http\Controllers\Settings\AdminUserController as admin;
use App\Http\Controllers\Settings\Location\CountryController as country;
use App\Http\Controllers\Settings\Location\DivisionController as division;
use App\Http\Controllers\Settings\Location\DistrictController as district;
use App\Http\Controllers\Settings\Location\UpazilaController as upazila;
use App\Http\Controllers\Settings\Location\ThanaController as thana;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController as profile;
use App\Http\Controllers\CitizenCertificateController as citizen;
use App\Http\Controllers\CharacterCertificateController as character;
use App\Http\Controllers\PermanentResidentController as permanentresident;
use App\Http\Controllers\HoldingController as holding;
use App\Http\Controllers\TradeLicenseController as trade;
use App\Http\Controllers\WarishanController as warishan;
use App\Http\Controllers\FamilyCertificateController as family;
use App\Http\Controllers\OtherInformationController as others;
use App\Http\Controllers\PaymentReceiptController as payment;
use App\Http\Controllers\DisabilityCertificateController as disablity;
use App\Http\Controllers\OldageAllowanceController as oldallowance;
use App\Http\Controllers\WidowAllowanceController as widowallowance;
use App\Http\Controllers\MaternityAllowanceController as maternityallowance;
use App\Http\Controllers\VgfCardController as vgfcard;
use App\Http\Controllers\PorishodSettingController as porishodsettiong;
use App\Http\Controllers\AllOnlineApplicationsController as allapplication;
use App\Http\Controllers\AttestationFamilymemberController as attesteation;

//extra
use App\Http\Controllers\EducationalQualificationController as education;
use App\Http\Controllers\GovernmentFacilityController as govtfacility;
use App\Http\Controllers\MobileBankController as mobilebank;
use App\Http\Controllers\DigitalDeviceController as digitaldevice;
use App\Http\Controllers\TelecommunicationController as telecomunication;
use App\Http\Controllers\SourceIncomeController as sourceincome;
use App\Http\Controllers\SourcesBusinessTaxeController as sourcebusiness;
use App\Http\Controllers\HousingTypeController as housingtype;




use App\Http\Controllers\FrontendController as front;
/* Middleware */
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isOwner;
use App\Http\Middleware\isSalesmanager;
use App\Http\Middleware\isSalesman;

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
// Route::get('/', [front::class,'index'])->name('front');
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/', [auth::class,'signInForm'])->name('signIn');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');
Route::get('/registration', [front::class,'mem_regi'])->name('member.registration');
Route::post('/registration/save', [front::class,'mem_regi_store'])->name('member.registration.store');
Route::get('/registration/success/{id}', [front::class,'mem_regi_success'])->name('member.registration.success');

/*AJAX Call */
Route::get('/upzilla/ajax/{district_id}', [allapplication::class, 'loadUpazillaAjax'])->name('loadupazila.ajax');
Route::get('/union/ajax/{upazila_id}', [allapplication::class, 'loadUnionAjax'])->name('loadunion.ajax');

Route::group(['middleware'=>isAdmin::class],function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [dash::class,'adminDashboard'])->name('admin.dashboard');
        /* settings */
        Route::resource('users',user::class,['as'=>'admin']);
        Route::resource('admin',admin::class,['as'=>'admin']);
        Route::resource('country',country::class,['as'=>'admin']);
        Route::resource('division',division::class,['as'=>'admin']);
        Route::resource('district',district::class,['as'=>'admin']);
        Route::resource('upazila',upazila::class,['as'=>'admin']);
        Route::resource('thana',thana::class,['as'=>'admin']);
        Route::resource('slider',SliderController::class,['as'=>'admin']);
        Route::resource('profile',profile::class,['as'=>'admin']);

        Route::resource('citizen',citizen::class,['as'=>'admin']);
        Route::get('citizen-firstform/{encrypted_id}',[citizen::class,'FormPartFirstUp'])->name('admin.citizenfirstpart');
        Route::post('citizen-firstform-update/{encrypted_id}',[citizen::class,'FormPartFirstUpdate'])->name('admin.citizenfirstpartupdate');
        Route::get('citizen-part2/{encrypted_id}',[citizen::class,'FormPartSecond'])->name('citizensecondpart.form');
        Route::post('citizen-part2add/{encrypted_id}',[citizen::class,'FormPartSecondUpdate'])->name('citizensecondpart_update');
        Route::get('/citizen_primary/{id}',[citizen::class,'primaryIndex'])->name('citizen_primary.list');
        Route::get('citizen_profile',[citizen::class,'profile'])->name('citizen_profile.list');
        Route::get('/citizens_profile/{id}',[citizen::class,'add_profile'])->name('citizens_profile');

        Route::resource('character',character::class,['as'=>'admin']);
        Route::get('character-firstform/{encrypted_id}',[character::class,'FormPartFirstUp'])->name('admin.characterfirstpart');
        Route::post('character-firstform-update/{encrypted_id}',[character::class,'FormPartFirstUpdate'])->name('admin.characterfirstpartupdate');
        Route::get('character-part2/{encrypted_id}',[character::class,'FormPartSecond'])->name('charactersecondpart.form');
        Route::post('character-part2add/{encrypted_id}',[character::class,'FormPartSecondUpdate'])->name('charactersecondpart_update');
        Route::get('/character_primary/{id}',[character::class,'primaryIndex'])->name('character_primary.list');
        Route::get('character_profile',[character::class,'profile'])->name('character_profile.list');
        Route::get('/characters_profile/{id}',[character::class,'add_profile'])->name('characters_profile');

        Route::resource('permanentresident',permanentresident::class,['as'=>'admin']);
        Route::get('permanent-firstform/{encrypted_id}',[permanentresident::class,'FormPartFirstUp'])->name('admin.permanentfirstpart');
        Route::post('permanent-firstform-update/{encrypted_id}',[permanentresident::class,'FormPartFirstUpdate'])->name('admin.permanentfirstpartupdate');
        Route::get('permanent-part2/{encrypted_id}',[permanentresident::class,'FormPartSecond'])->name('permanentsecondpart.form');
        Route::post('permanent-part2add/{encrypted_id}',[permanentresident::class,'FormPartSecondUpdate'])->name('permanentsecondpart_update');
        Route::get('/permanent_primary/{id}',[permanentresident::class,'primaryIndex'])->name('permanent_primary.list');
        Route::get('permanents_profile',[permanentresident::class,'profile'])->name('permanents_profile.list');
        Route::get('/permanents_profile/{id}',[permanentresident::class,'add_profile'])->name('permanents_profile');

        Route::resource('holding',holding::class,['as'=>'admin']);
        Route::get('hold-firstform/{encrypted_id}',[holding::class,'FormPartFirstUp'])->name('admin.holdingfirstpart');
        Route::post('firstform-update/{encrypted_id}',[holding::class,'FormPartFirstUpdate'])->name('admin.holdingfirstpartupdate');
        Route::get('holding-part2/{encrypted_id}',[holding::class,'FormPartSecond'])->name('holdingsecondpart.form');
        Route::post('holding-part2add/{encrypted_id}',[holding::class,'FormPartSecondUpdate'])->name('holdingsecondpart_update');
        Route::get('holding_cancel',[holding::class,'cancel'])->name('admin.holding_cancel');
        Route::get('/hold_primary/{id}',[holding::class,'primaryIndex'])->name('hold_primary.list');
        // Route::get('generate-pdf', [holding::class, 'generatePDF']);
        Route::get('hold_profile',[holding::class,'profile'])->name('admin.hold_profile.list');
        Route::get('hold_profile-edit/{id}',[holding::class,'EditProfileApproved'])->name('admin.hold_profileupdate');
        Route::post('hold_profile-edit/{id}',[holding::class,'EditProfileApprovedUpdate'])->name('admin.hold_profileupdate');
        Route::get('/holding_profile/{id}',[holding::class,'add_profile'])->name('holding_profile');

        Route::get('hold_tax',[holding::class,'tax'])->name('admin.hold_tax.list');

        Route::resource('trade',trade::class,['as'=>'admin']);
        Route::get('trade-firstform/{encrypted_id}',[trade::class,'FormPartFirstUp'])->name('admin.tradefirstpart');
        Route::post('trade-firstform-update/{encrypted_id}',[trade::class,'FormPartFirstUpdate'])->name('admin.tradefirstpartupdate');
        Route::get('trade-part2/{encrypted_id}',[trade::class,'FormPartSecond'])->name('tradesecondpart.form');
        Route::post('trade-part2add/{encrypted_id}',[trade::class,'FormPartSecondUpdate'])->name('tradesecondpart_update');
        Route::get('/trade_primary/{id}',[trade::class,'primaryIndex'])->name('trade_primary.list');
        Route::get('trade_profile',[trade::class,'profile'])->name('trade_profile.list');
        Route::get('/trades_profile/{id}',[trade::class,'add_profile'])->name('trades_profile');
        // Route::post('temporary_store',[trade::class,'temporary_store'])->name('admin.temporary_store');

        Route::get('trade_tax',[trade::class,'tax'])->name('admin.trade_tax.list');

        Route::resource('warishan',warishan::class,['as'=>'admin']);
        Route::get('warishan-firstform/{encrypted_id}',[warishan::class,'FormPartFirstUp'])->name('admin.warishanfirstpart');
        Route::post('warishan-firstform-update/{encrypted_id}',[warishan::class,'FormPartFirstUpdate'])->name('admin.warishanfirstpartupdate');
        Route::get('warishan-part2/{encrypted_id}',[warishan::class,'FormPartSecond'])->name('warishansecondpart.form');
        Route::post('warisan-part2add/{encrypted_id}',[warishan::class,'FormPartSecondUpdate'])->name('warishansecondpart_update');
        Route::get('/warishan_primary/{id}',[warishan::class,'primaryIndex'])->name('warishan_primary.list');
        Route::get('warishan_profile',[warishan::class,'profile'])->name('warishan_profile.list');
        Route::get('/warishans_profile/{id}',[warishan::class,'add_profile'])->name('warishans_profile');

        Route::resource('family',family::class,['as'=>'admin']);
        Route::get('family-firstform/{encrypted_id}',[family::class,'FormPartFirstUp'])->name('admin.familyfirstpart');
        Route::post('family-firstform-update/{encrypted_id}',[family::class,'FormPartFirstUpdate'])->name('admin.familyfirstpartupdate');
        Route::get('family-part2/{encrypted_id}',[family::class,'FormPartSecond'])->name('familysecondpart.form');
        Route::post('family-part2add/{encrypted_id}',[family::class,'FormPartSecondUpdate'])->name('familysecondpart_update');
        Route::get('/family-primary/{id}',[family::class,'primaryIndex'])->name('family_primary.list');
        Route::get('/family-profile/{id}',[family::class,'add_profile'])->name('family_profile');
        Route::get('family_profile',[family::class,'profile'])->name('family_profile.list');

        Route::resource('others',others::class,['as'=>'admin']);
        Route::resource('attesteation',attesteation::class,['as'=>'admin']);
        Route::get('attesteation_profile',[attesteation::class,'profile'])->name('attesteation_profile.list');
        Route::get('/attesteations_profile/{id}',[attesteation::class,'add_profile'])->name('attesteations_profile');

        Route::resource('payment',payment::class,['as'=>'admin']);
        Route::resource('disablity',disablity::class,['as'=>'admin']);
        Route::resource('oldallowance',oldallowance::class,['as'=>'admin']);
        Route::resource('widowallowance',widowallowance::class,['as'=>'admin']);
        Route::resource('maternityallowance',maternityallowance::class,['as'=>'admin']);
        Route::resource('vgfcard',vgfcard::class,['as'=>'admin']);
        Route::get('/dis/search',[disablity::class,'getholding'])->name('dis.getholding');
        // Route::get('/porishod-settings',[porishodsettiong::class,'create'])->name('porishod.setting');
        Route::resource('porishodsettiong',porishodsettiong::class,['as'=>'admin']);
        Route::resource('allapplication',allapplication::class,['as'=>'admin']);
        Route::get('/application/{type}', [allapplication::class,'application_check'])->name('aplication.application_check');

        //extra route
        Route::resource('education',education::class,['as'=>'admin']);
        Route::resource('govtfacility',govtfacility::class,['as'=>'admin']);
        Route::resource('mobilebank',mobilebank::class,['as'=>'admin']);
        Route::resource('digitaldevice',digitaldevice::class,['as'=>'admin']);
        Route::resource('telecomunication',telecomunication::class,['as'=>'admin']);
        Route::resource('sourceincome',sourceincome::class,['as'=>'admin']);
        Route::resource('housingtype',housingtype::class,['as'=>'admin']);
        Route::resource('sourcebusiness',sourcebusiness::class,['as'=>'admin']);


    });
});

Route::group(['middleware'=>isOwner::class],function(){
    Route::prefix('owner')->group(function(){
        Route::get('/dashboard', [dash::class,'ownerDashboard'])->name('owner.dashboard');
        Route::resource('users',user::class,['as'=>'owner']);
    });
});

Route::group(['middleware'=>isSalesmanager::class],function(){
    Route::prefix('salesmanager')->group(function(){
        Route::get('/dashboard', [dash::class,'salesmanagerDashboard'])->name('salesmanager.dashboard');

    });
});

Route::group(['middleware'=>isSalesman::class],function(){
    Route::prefix('salesman')->group(function(){
        Route::get('/dashboard', [dash::class,'salesmanDashboard'])->name('salesman.dashboard');

    });
});


