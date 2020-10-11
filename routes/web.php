<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){ return view('welcome');});
Route::get('/dashboard', function () {
    return view('admin_pages');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-patients','patientsController@createPatients')->name("Register Patient");
Route::patch('/change-patient/{id}','patientsController@changePatient');
Route::delete('/delete-patient/{id}','patientsController@deletePatients');
Route::get('/get-patient','patientsController@getpatient')->name("Patients Details");

Route::post('/create-diseases', 'diseasesController@createDiseases');
Route::patch('/change-diseases/{id}','diseasesController@changeDiseases');
Route::delete('/delete-diseases/{id}','diseasesController@deleteDisease');
Route::get('/get-diseases','diseasesController@getdiseases')->name("Diseases Details");

Route::post('/create-clinicFindings','clinicFindingsController@createClinicFindings');
Route::patch('/change-clinicFindings/{id}','clinicFindingsController@changeClinicFindings');
Route::delete('/delete-clinicFindings/{id}','clinicFindingsController@deleteClinicFindings');
Route::get('/get-clinicFindings','clinicFindingsController@getclinicFindings')->name("clinicFindings Details");

Route::post('/create-medicalPractitioners','medicalPractitionersController@createMedicalPractitioners');
Route::patch('/change-medicalPractitioners/{id}','medicalPractitionersController@changeMedicalPractitioners');
Route::delete('/delete-medicalPractitioners/{id}','medicalPractitionersController@deleteMedicalPractitioners');
Route::get('/get-medicalPractitioners','medicalPractitionersController@getmedicalPractitioners')->name("medicalPractitioners Details");

Route::post('/create-permissions','permissionsController@createPermissions');
Route::patch('/change-permissions/{id}','permissionsController@changePermissions');
Route::delete('/delete-permissions/{id}','permissionsController@deletePermissions');

Route::post('/create-roles','rolesController@createRoles');
Route::patch('/change-roles/{id}','rolesController@changeRoles');
Route::delete('/delete-roles/{id}','rolesController@deleteRoles');
Route::get('/get-roles','rolesController@getRoles')->name("roles Details");

Route::post('/create-ageGroup','ageGroupController@createAgeGroup');
Route::patch('/change-ageGroup/{id}','ageGroupController@changeAgeGroup');
Route::delete('/delete-ageGroup/{id}','ageGroupController@deleteAgeGroup');
Route::get('/get-ageGroup','ageGroupController@getAgeGroup')->name("ageGroup Details");

Route::post('/create-treatment','treatmentController@createTreatment');
Route::patch('/change-treatment/{id}','treatmentController@changeTreatment');
Route::delete('/remove-treatment/{id}','treatmentController@removeTreatment');
Route::get('/get-treatment','treatmentController@getTreatment')->name("treatment Details");

Route::post('/create-ageGroupTreatment','ageGroupTreatmentController@createAgeGroupTreatment');
Route::patch('/change-ageGroupTreatment/{id}','ageGroupTreatmentController@changeAgeGroupTreatment');
Route::delete('/remove-ageGroupTreatment/{id}','ageGroupTreatmentController@removeAgeGroupTreatment');
Route::get('/get-ageGroupTreatment','ageGroupTreatmentController@getAgeGroupTreatment')->name("ageGroupTreatment Details");

Route::post('/create-diseasesManagement','diseasesManagementController@createDiseasesManagement');
Route::patch('/change-diseasesManagement/{id}','diseasesManagementController@changeDiseasesManagement');
Route::delete('/remove-diseasesManagement/{id}','diseasesManagementController@removeDiseasesManagement');
Route::get('/get-diseasesManagement','diseasesManagementController@getDiseasesManagement')->name("Diseases Management Details");

Route::post('/create-diseasesClinicFindings','diseasesClinicFindingsController@createDiseasesClinicFindings');
Route::patch('/change-diseasesClinicFindings/{id}','diseasesClinicFindingsController@changeDiseasesClinicFindings');
Route::delete('/delete-diseasesClinicFindings/{id}','diseasesClinicFindingsController@removeDiseasesClinicFindings');
Route::get('/get-diseasesClinicFindings','diseasesClinicFindingsController@getDiseasesClinicFindings')->name("diseasesClinicFindings Details");

Route::post('/create-diseasesTreatment','diseasesTreatmentController@createDiseasesTreatment');
Route::patch('/change-diseasesTreatment/{id}','diseasesTreatmentController@changeDiseasesTreatment');
Route::delete('/remove-diseasesTreatment/{id}','diseasesTreatmentController@removeDiseasesTreatment');
Route::get('/get-diseasesTreatment','diseasesTreatmentController@getDiseasesTreatment')->name("Diseases Treatment Details");

Route::post('/create-patientsDiseases','patientsDiseasesController@createPatientsDiseases');
Route::patch('/change-patientsDiseases/{id}','patientsDiseasesController@changePatientsDiseases');
Route::delete('/delete-patientsDiseases/{id}','patientsDiseasesController@removePatientsDiseases');
Route::get('/get-patientsDiseases','patientsDiseasesController@getPatientsDiseases')->name("Patients Diseases Details");

Route::post('/create-patientsClinicFindings','patientsClinicFindingsController@createPatientsClinicFindings');
Route::patch('/change-patientsClinicFindings/{id}','patientsClinicFindingsController@changePatientsClinicFindings');
Route::delete('/delete-patientsClinicFindings/{id}','patientsClinicFindingsController@removePatientsclinicFindings');
Route::get('/get-patientsClinicFindings','patientsClinicFindingsController@getPatientsClinicFindings')->name("Patients ClinicFindings Details");

Route::post('/create-management','managementController@createManagement');
Route::patch('/change-management/{id}','managementController@changeManagement');
Route::delete('/remove-management/{id}','managementController@removeManagement');
Route::get('/get-manangement','manangementController@getManangement')->name("Manangement Details");

Route::post('/create-visits','visitsController@createVisits')->name("Register Visit");
Route::patch('/change-visits/{id}','visitsController@changeVisits');
Route::delete('/delete-visits/{id}','visitsController@removeVisits');
Route::get('/get-visits','visitsController@getVisits')->name("Visits Details");

Route::post('/create-appointments','appointmentsController@createAppointments')->name("Make Appointment");
Route::patch('/change-appointments/{id}','appointmentsController@changeAppointments');
Route::delete('/delete-appointments/{id}','appointmentsController@removeAppointments');
Route::get('/get-appointments','appointmentsController@getAppointments')->name("Appointments Details");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
