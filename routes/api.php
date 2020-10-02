<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-patient','patientsController@getPatient');
Route::get('/get-diseases','diseasesController@getDiseases');
Route::get('/get-clinicFindings','clinicFindingsController@getClinicFindings');
Route::get('/get-medicalPractitioners','medicalPractitionersController@getMedicalPractitioners');
Route::get('/get-permissions','permissionsController@getPermissions');
Route::get('/get-roles','rolesController@getRoles');
Route::get('/get-ageGroup','ageGroupController@getAgeGroup');
Route::get('/get-treatment','treatmentController@getTreatment');
Route::get('/get-ageGroupTreatment','ageGroupTreatmentController@getAgeGroupTreatment');
Route::get('/get-diseasesManagement','diseasesManagementController@getDiseasesManagement');
Route::get('/get-diseasesClinicFindings','diseasesClinicFindingsController@getDiseasesClinicFindings');
Route::get('/get-diseasesTreatment','diseasesTreatmentController@getDiseasesTreatment');
Route::get('/get-patientsDiseases','patientsDiseasesController@getPatientsDiseases');
Route::get('/get-patientsClinicFindings','patientsClinicFindingsController@getPatientsClinicFindings');
Route::get('/get-management','managementController@getManagement');

