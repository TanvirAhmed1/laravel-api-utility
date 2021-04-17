<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


// Addresses
Route::prefix('/address')->group(function() {
    Route::get('/all', 'Api\v1\AddressController@index');
    Route::post('/single', 'Api\v1\AddressController@singleAddress');

    Route::group(['middleware'=>'auth:api'], function () {
        Route::post('/new', 'Api\v1\AddressController@createAddress');
        Route::post('/change', 'Api\v1\AddressController@updateAddress');
        Route::post('/deactivate', 'Api\v1\AddressController@deactivateAddress');
        Route::post('/activate', 'Api\v1\AddressController@activateAddress');
    });
});

// Users
Route::prefix('/user')->group(function() {
    Route::post('/register', 'Api\v1\UserController@register');
    Route::post('/login', 'Api\v1\UserController@login');
//    Route::post('/newToken', 'Api\v1\UserController@requestNewToken');

    Route::group(['middleware'=>'auth:api'], function () {

    });
});

// Countries
Route::prefix('/country')->group(function() {
    Route::get('/countries', 'Api\v1\CountryController@getAllCountries');
    Route::post('/single', 'Api\v1\CountryController@singleCountry');
});

// Route::prefix('/division')->group(function() {
//     Route::get('/divisions', 'Api\v1\DivisionController@getAllDivisions');
//     Route::post('/single', 'Api\v1\DivisionController@singleDivision');
//     Route::post('/new', 'Api\v1\DivisionController@createDivision');
//     // Route::get('/single/{id}','Api\v1\DivisionController@singleDivision');
// });

Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/division')->group(function() {
        Route::get('/divisions', 'Api\v1\DivisionController@getAllDivisions');
        Route::post('/single', 'Api\v1\DivisionController@singleDivision');
        Route::post('/new', 'Api\v1\DivisionController@createDivision');
        Route::post('/change', 'Api\v1\DivisionController@updateDivision');
    });
});

Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/district')->group(function() {
        Route::get('/districts', 'Api\v1\DistrictController@getAllDistricts');
        Route::post('/single', 'Api\v1\DistrictController@singleDistrict');
        Route::post('/new', 'Api\v1\DistrictController@createDistrict');
        Route::post('/change', 'Api\v1\DistrictController@updateDistrict');
    });
});
Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/subdistrict')->group(function() {
        Route::get('/subdistricts', 'Api\v1\SubdistrictController@getAllSubdistricts');
        Route::post('/single', 'Api\v1\SubdistrictController@singleSubdistrict');
        Route::post('/new', 'Api\v1\SubdistrictController@createSubdistrict');
        Route::post('/change', 'Api\v1\SubdistrictController@updateSubdistrict');
    });
});

Route::group(['middleware'=>'auth:api'], function () {
Route::prefix('/citycorporation')->group(function() {
    Route::get('/citycorporations', 'Api\v1\CitycorporationController@getAllCitycorporations');
    Route::post('/single', 'Api\v1\CitycorporationController@singleCitycorporation');
    Route::post('/new', 'Api\v1\CitycorporationController@createCitycorporation');
    Route::post('/change', 'Api\v1\CitycorporationController@updateCitycorporation');
});
});

Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/unioncouncil')->group(function() {
        Route::get('/unioncouncils', 'Api\v1\UnioncouncilController@getAllUnioncouncils');
        Route::post('/single', 'Api\v1\UnioncouncilController@singleUnioncouncil');
        Route::post('/new', 'Api\v1\UnioncouncilController@createUnioncouncil');
        Route::post('/change', 'Api\v1\UnioncouncilController@updateUnioncouncil');
    });
});

Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/municipality')->group(function() {
        Route::get('/municipalities', 'Api\v1\MunicipalityController@getAllMunicipalities');
        Route::post('/single', 'Api\v1\MunicipalityController@singleMunicipality');
        Route::post('/new', 'Api\v1\MunicipalityController@createMunicipality');
        Route::post('/change', 'Api\v1\MunicipalityController@updateMunicipality');
    });
});

Route::group(['middleware'=>'auth:api'], function () {
    Route::prefix('/village')->group(function() {
        Route::get('/villages', 'Api\v1\VillageController@getAllVillages');
        Route::post('/single', 'Api\v1\VillageController@singleVillage');
        Route::post('/new', 'Api\v1\VillageController@createVillage');
        Route::post('/change', 'Api\v1\VillageController@updateVillage');
    });
});

Route::group(['middleware'=>'auth:api'], function () {
Route::prefix('/ward')->group(function() {
    Route::get('/wards', 'Api\v1\WardController@getAllWardes');
    Route::post('/single', 'Api\v1\WardController@singleWard');
    Route::post('/new', 'Api\v1\WardController@createWard');
    Route::post('/change', 'Api\v1\WardController@updateWard');
});
});

Route::prefix('/catdomain')->group(function() {
    Route::get('/domains', 'Api\v1\CatDomainController@getAllCatDomains');
    Route::post('/single', 'Api\v1\CatDomainController@singleCatDomain');
    Route::post('/new', 'Api\v1\CatDomainController@createCatDomain');
    Route::post('/change', 'Api\v1\CatDomainController@updateCatDomain');
});
Route::prefix('/catkingdom')->group(function() {
    Route::get('/kingdoms', 'Api\v1\CatKingdomController@getAllCatKingdoms');
    Route::post('/single', 'Api\v1\CatKingdomController@singleCatKingdom');
    Route::post('/new', 'Api\v1\CatKingdomController@createCatKingdom');
    Route::post('/change', 'Api\v1\CatKingdomController@updateCatKingdom');
});
Route::prefix('/catclass')->group(function() {
    Route::get('/classes', 'Api\v1\CatClassController@getAllCatClasses');
    Route::post('/single', 'Api\v1\CatClassController@singleCatClass');
    Route::post('/new', 'Api\v1\CatClassController@createCatClass');
    Route::post('/change', 'Api\v1\CatClassController@updateCatClass');
});
Route::prefix('/catorder')->group(function() {
    Route::get('/orders', 'Api\v1\CatOrderController@getAllCatOrders');
    Route::post('/single', 'Api\v1\CatOrderController@singleCatOrder');
    Route::post('/new', 'Api\v1\CatOrderController@createCatOrder');
    Route::post('/change', 'Api\v1\CatOrderController@updateCatOrder');
});
Route::prefix('/catsuborder')->group(function() {
    Route::get('/suborders', 'Api\v1\CatSuborderController@getAllCatSuborders');
    Route::post('/single', 'Api\v1\CatSuborderController@singleCatSuborder');
    Route::post('/new', 'Api\v1\CatSuborderController@createCatSuborder');
    Route::post('/change', 'Api\v1\CatSuborderController@updateCatSuborder');
});
Route::prefix('/catfamily')->group(function() {
    Route::get('/families', 'Api\v1\CatFamilyController@getAllCatFamilies');
    Route::post('/single', 'Api\v1\CatFamilyController@singleCatFamily');
    Route::post('/new', 'Api\v1\CatFamilyController@createCatFamily');
    Route::post('/change', 'Api\v1\CatFamilyController@updateCatFamily');
});
Route::prefix('/catgenus')->group(function() {
    Route::get('/genuses', 'Api\v1\CatGenusController@getAllCatGenuses');
    Route::post('/single', 'Api\v1\CatGenusController@singleCatGenus');
    Route::post('/new', 'Api\v1\CatGenusController@createCatGenus');
    Route::post('/change', 'Api\v1\CatGenusController@updateCatGenus');
});
Route::prefix('/product')->group(function() {
    Route::get('/products', 'Api\v1\ProductController@getAllProducts');
    Route::post('/single', 'Api\v1\ProductController@singleProduct');
    Route::post('/new', 'Api\v1\ProductController@createProduct');
    Route::post('/change', 'Api\v1\ProductController@updateProduct');
});
Route::prefix('/education')->group(function() {
    Route::get('/educations', 'Api\v1\EducationController@getAllEducations');
    Route::post('/single', 'Api\v1\EducationController@singleEducation');
    Route::post('/new', 'Api\v1\EducationController@createEducation');
    Route::post('/change', 'Api\v1\EducationController@updateEducation');
});
Route::prefix('/experience')->group(function() {
    Route::get('/experiences', 'Api\v1\ExperienceController@getAllExperiences');
    Route::post('/single', 'Api\v1\ExperienceController@singleExperience');
    Route::post('/new', 'Api\v1\ExperienceController@createExperience');
    Route::post('/change', 'Api\v1\ExperienceController@updateExperience');
});
Route::prefix('/productfeature')->group(function() {
    Route::get('/productfeatures', 'Api\v1\ProductFeatureController@getAllProductFeatures');
    Route::post('/single', 'Api\v1\ProductFeatureController@singleProductFeature');
    Route::post('/new', 'Api\v1\ProductFeatureController@createProductFeature');
    Route::post('/change', 'Api\v1\ProductFeatureController@updateProductFeature');
});
Route::prefix('/bio')->group(function() {
    Route::get('/bios', 'Api\v1\BioController@getAllBios');
    Route::post('/single', 'Api\v1\BioController@singleBio');
    Route::post('/new', 'Api\v1\BioController@createBio');
    Route::post('/change', 'Api\v1\BioController@updateBio');
});

Route::prefix('/sibling')->group(function() {
    Route::get('/siblings', 'Api\v1\SiblingController@getAllSiblings');
    Route::post('/single', 'Api\v1\SiblingController@singleSibling');
    Route::post('/new', 'Api\v1\SiblingController@createSibling');
    Route::post('/change', 'Api\v1\SiblingController@updateSibling');
});
Route::prefix('/children')->group(function() {
    Route::get('/childrens', 'Api\v1\ChildrenController@getAllChildrens');
    Route::post('/single', 'Api\v1\ChildrenController@singleChildren');
    Route::post('/new', 'Api\v1\ChildrenController@createChildren');
    Route::post('/change', 'Api\v1\ChildrenController@updateChildren');
});
Route::prefix('/referee')->group(function() {
    Route::get('/referees', 'Api\v1\RefereeController@getAllReferees');
    Route::post('/single', 'Api\v1\RefereeController@singleReferee');
    Route::post('/new', 'Api\v1\RefereeController@createReferee');
    Route::post('/change', 'Api\v1\RefereeController@updateReferee');
});
Route::prefix('/institute')->group(function() {
    Route::get('/institutes', 'Api\v1\InstitueController@getAllInstitutes');
    Route::post('/single', 'Api\v1\InstitueController@singleInstitute');
    Route::post('/new', 'Api\v1\InstitueController@createInstitute');
    Route::post('/change', 'Api\v1\InstitueController@updateInstitute');
});
Route::prefix('/occupation')->group(function() {
    Route::get('/occupations', 'Api\v1\OccupationController@getAllOccupations');
    Route::post('/single', 'Api\v1\OccupationController@singleOccupation');
    Route::post('/new', 'Api\v1\OccupationController@createOccupation');
    Route::post('/change', 'Api\v1\OccupationController@updateOccupation');
});
Route::prefix('/organization')->group(function() {
    Route::get('/organizations', 'Api\v1\OrganizationController@getAllOrganizations');
    Route::post('/single', 'Api\v1\OrganizationController@singleOrganization');
    Route::post('/new', 'Api\v1\OrganizationController@createOrganization');
    Route::post('/change', 'Api\v1\OrganizationController@updateOrganization');
});
Route::prefix('/degree')->group(function() {
    Route::get('/degrees', 'Api\v1\DegreeController@getAllDegrees');
    Route::post('/single', 'Api\v1\DegreeController@singleDegree');
    Route::post('/new', 'Api\v1\DegreeController@createDegree');
    Route::post('/change', 'Api\v1\DegreeController@updateDegree');
});
Route::prefix('/contact')->group(function() {
    Route::get('/contacts', 'Api\v1\ContactController@getAllContacts');
    Route::post('/single', 'Api\v1\ContactController@singleContact');
    Route::post('/new', 'Api\v1\ContactController@createContact');
    Route::post('/change', 'Api\v1\ContactController@updateContact');
});
Route::prefix('/property')->group(function() {
    Route::get('/properties', 'Api\v1\PropertyController@getAllProperties');
    Route::post('/single', 'Api\v1\PropertyController@singleProperty');
    Route::post('/new', 'Api\v1\PropertyController@createProperty');
    Route::post('/change', 'Api\v1\PropertyController@updateProperty');
});

Route::prefix('/leadpayment')->group(function() {
    Route::get('/leadpayments', 'Api\v1\LeadPaymentController@getAllLeadPayments');
    Route::post('/single', 'Api\v1\LeadPaymentController@singleLeadPayment');
    Route::post('/new', 'Api\v1\LeadPaymentController@createLeadPayment');
    Route::post('/change', 'Api\v1\LeadPaymentController@updateLeadPayment');
});
Route::prefix('/leadproduct')->group(function() {
    Route::get('/leadproducts', 'Api\v1\LeadProductController@getAllLeadProducts');
    Route::post('/single', 'Api\v1\LeadProductController@singleLeadProduct');
    Route::post('/new', 'Api\v1\LeadProductController@createLeadProduct');
    Route::post('/discard', 'Api\v1\LeadProductController@deleteLeadProduct');
});
Route::prefix('/commcall')->group(function() {
    Route::get('/commcalls', 'Api\v1\CommCallController@getAllCommCalls');
    Route::post('/single', 'Api\v1\CommCallController@singleCommCall');
    Route::post('/new', 'Api\v1\CommCallController@createCommCall');
    Route::post('/change', 'Api\v1\CommCallController@updateCommCall');
});
Route::prefix('/stagecnc')->group(function() {
    Route::get('/stagecncs', 'Api\v1\StageCncController@getAllStageCncs');
    Route::post('/single', 'Api\v1\StageCncController@singleStageCnc');
    Route::post('/new', 'Api\v1\StageCncController@createStageCnc');
    Route::post('/change', 'Api\v1\StageCncController@updateStageCnc');
});
Route::prefix('/negotiationdetail')->group(function() {
    Route::get('/negotiationdetails', 'Api\v1\NegotiationDetailController@getAllNegotiationDetails');
    Route::post('/single', 'Api\v1\NegotiationDetailController@singleNegotiationDetail');
    Route::post('/new', 'Api\v1\NegotiationDetailController@createNegotiationDetail');
    Route::post('/change', 'Api\v1\NegotiationDetailController@updateNegotiationDetail');
});
Route::prefix('/lead')->group(function() {
    Route::get('/leads', 'Api\v1\LeadController@getAllLeads');
    Route::post('/single', 'Api\v1\LeadController@singleLead');
    Route::post('/new', 'Api\v1\LeadController@createLead');
    Route::post('/change', 'Api\v1\LeadController@updateLead');
});
Route::prefix('/advisorproduct')->group(function() {
    Route::get('/advisorproducts', 'Api\v1\AdvisorProductController@getAllAdvisorProducts');
    Route::post('/single', 'Api\v1\AdvisorProductController@singleAdvisorProduct');
    Route::post('/new', 'Api\v1\AdvisorProductController@createAdvisorProduct');
    Route::post('/discard', 'Api\v1\AdvisorProductController@deleteAdvisorProduct');
});
Route::prefix('/visittoken')->group(function() {
    Route::get('/visittokens', 'Api\v1\VisitTokenController@getAllVisitTokens');
    Route::post('/single', 'Api\v1\VisitTokenController@singleVisitToken');
    Route::post('/new', 'Api\v1\VisitTokenController@createVisitToken');
    Route::post('/change', 'Api\v1\VisitTokenController@updateVisitToken');
});
Route::prefix('/stagedoa')->group(function() {
    Route::get('/stagedoas', 'Api\v1\StageDoaController@getAllStageDoas');
    Route::post('/single', 'Api\v1\StageDoaController@singleStageDoa');
    Route::post('/new', 'Api\v1\StageDoaController@createStageDoa');
    Route::post('/change', 'Api\v1\StageDoaController@updateStageDoa');
});
Route::prefix('/stagemnm')->group(function() {
    Route::get('/stagemnms', 'Api\v1\StageMnmController@getAllStageMnms');
    Route::post('/single', 'Api\v1\StageMnmController@singleStageMnm');
    Route::post('/new', 'Api\v1\StageMnmController@createStageMnm');
    Route::post('/change', 'Api\v1\StageMnmController@updateStageMnm');
});
Route::prefix('/meetingnote')->group(function() {
    Route::get('/meetingnotes', 'Api\v1\MeetingNoteController@getAllMeetingNotes');
    Route::post('/single', 'Api\v1\MeetingNoteController@singleMeetingNote');
    Route::post('/new', 'Api\v1\MeetingNoteController@createMeetingNote');
    Route::post('/change', 'Api\v1\MeetingNoteController@updateMeetingNote');
});
Route::prefix('/stageprojectvisit')->group(function() {
    Route::get('/stageprojectvisits', 'Api\v1\StageProjectVisitController@getAllStageProjectVisits');
    Route::post('/single', 'Api\v1\StageProjectVisitController@singleStageProjectVisit');
    Route::post('/new', 'Api\v1\StageProjectVisitController@createStageProjectVisit');
    Route::post('/change', 'Api\v1\StageProjectVisitController@updateStageProjectVisit');
});
Route::prefix('/stagefinancial')->group(function() {
    Route::get('/stagefinancials', 'Api\v1\StageFinancialController@getAllStageFinancials');
    Route::post('/single', 'Api\v1\StageFinancialController@singleStageFinancial');
    Route::post('/new', 'Api\v1\StageFinancialController@createStageFinancial');
    Route::post('/change', 'Api\v1\StageFinancialController@updateStageFinancial');
});
Route::prefix('/commmeeting')->group(function() {
    Route::get('/commmeetings', 'Api\v1\CommMeetingController@getAllCommMeetings');
    Route::post('/single', 'Api\v1\CommMeetingController@singleCommMeeting');
    Route::post('/new', 'Api\v1\CommMeetingController@createCommMeeting');
    Route::post('/change', 'Api\v1\CommMeetingController@updateCommMeeting');
});
Route::prefix('/stagepayment')->group(function() {
    Route::get('/stagepayments', 'Api\v1\StagePaymentController@getAllStagePayments');
    Route::post('/single', 'Api\v1\StagePaymentController@singleStagePayment');
    Route::post('/new', 'Api\v1\StagePaymentController@createStagePayment');
    Route::post('/change', 'Api\v1\StagePaymentController@updateStagePayment');
});
Route::prefix('/visitdetail')->group(function() {
    Route::get('/visitdetails', 'Api\v1\VisitDetailController@getAllVisitDetails');
    Route::post('/single', 'Api\v1\VisitDetailController@singleVisitDetail');
    Route::post('/new', 'Api\v1\VisitDetailController@createVisitDetail');
    Route::post('/change', 'Api\v1\VisitDetailController@updateVisitDetail');
});
Route::prefix('/leadenquirydetail')->group(function() {
    Route::get('/leadenquirydetails', 'Api\v1\LeadEnquiryDetailController@getAllLeadEnquiryDetails');
    Route::post('/single', 'Api\v1\LeadEnquiryDetailController@singleLeadEnquiryDetail');
    Route::post('/new', 'Api\v1\LeadEnquiryDetailController@createLeadEnquiryDetail');
    Route::post('/discard', 'Api\v1\LeadEnquiryDetailController@deleteLeadEnquiryDetail');
});
Route::prefix('/stagenegotiation')->group(function() {
    Route::get('/stagenegotiations', 'Api\v1\StageNegotiationController@getAllStageNegotiations');
    Route::post('/single', 'Api\v1\StageNegotiationController@singleStageNegotiation');
    Route::post('/new', 'Api\v1\StageNegotiationController@createStageNegotiation');
    Route::post('/change', 'Api\v1\StageNegotiationController@updateStageNegotiation');
});
Route::prefix('/leadinterestenq')->group(function() {
    Route::get('/leadinterestenqs', 'Api\v1\LeadInterestEnqController@getAllLeadInterestEnqs');
    Route::post('/single', 'Api\v1\LeadInterestEnqController@singleLeadInterestEnq');
    Route::post('/new', 'Api\v1\LeadInterestEnqController@createLeadInterestEnq');
    Route::post('/change', 'Api\v1\LeadInterestEnqController@updateLeadInterestEnq');
});
