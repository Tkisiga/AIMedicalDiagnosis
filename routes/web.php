<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create-patients','patientsController@createPatients');
Route::patch('/change-patient/{id}','patientsController@changePatient');
//Route::http('/delete-patient/{id}','patientsController@deletePatients');

Route::post('/create-diseases', 'diseasesController@createDiseases');
Route::patch('/change-diseases/{id}','diseasesController@changeDiseases');
//Route::http('/delete-diseases/{id}','diseasesController@deleteDiseases');

Route::post('/create-symptoms','symptomsController@createSymptoms');
Route::patch('/change-symptoms/{id}','symptomsController@changeSymptoms');
//Route::http('/delete-symptoms/{id}','symptomsController@deleteSymptoms');

Route::post('/create-signs','signsController@createSigns');
Route::patch('/change-signs/{id}','signsController@changeSigns');
//Route::http('/delete-signs/{id}','signsController@deleteSigns');

Route::post('/create-medicalPractitioners','medicalPractitionersController@createMedicalPractitioners');
Route::patch('/change-medicalPractitioners/{id}','medicalPractitionersController@changeMedicalPractitioners');
//Route::http('/delete-medicalPractitioners/{id}','medicalPractitionersController@deleteMedicalPractitioners');

Route::post('/create-permissions','permissionsController@createPermissions');
Route::patch('/change-permissions/{id}','permissionsController@changePermissions');
//Route::http('/delete-permissions/{id}','permissionsController@deletePermissions');

Route::post('/create-roles','rolesController@createRoles');
Route::patch('/change-roles/{id}','rolesController@changeRoles');
//Route::http('/delete-roles/{id}','rolesController@deleteRoles');

Route::post('/create-ageGroup','ageGroupController@createAgeGroup');
Route::patch('/change-ageGroup/{id}','ageGroupController@changeAgeGroup');
//Route::http('/delete-ageGroup/{id}','ageGroupController@deleteAgeGroup');

Route::post('/create-treatment','treatmentController@createTreatment');
Route::patch('/change-treatment/{id}','treatmentController@changeTreatment');
//Route::http('/remove-treatment/{id}','treatmentController@removeTreatment');

Route::post('/create-ageGroupTreatment','ageGroupTreatmentController@createAgeGroupTreatment');
Route::patch('/change-ageGroupTreatment/{id}','ageGroupTreatmentController@changeAgeGroupTreatment');
//Route::http('/remove-ageGroupTreatment/{id}','ageGroupTreatmentController@removeAgeGroupTreatment');

Route::post('/create-diseasesManagement','diseasesManagementController@createDiseasesManagement');
Route::patch('/change-diseasesManagement/{id}','diseasesManagementController@changeDiseasesManagement');
//Route::http('/remove-diseasesManagement/{id}','diseasesManagementController@removeDiseasesManagement');

Route::post('/create-diseasesSigns','diseasesSignsController@createDiseasesSigns');
Route::patch('/change-diseasesSigns/{id}','diseasesSignsController@changeDiseasesSigns');
//Route::http('/remove-diseasesSigns/{id}','diseasesSignsController@removeDiseasesSigns');

Route::post('/create-diseasesSymptoms','diseasesSymptomsController@createDiseasesSymptoms');
Route::patch('/change-diseasesSymptoms/{id}','diseasesSymptomsController@changeDiseasesSymptoms');
//Route::http('/remove-diseasesSymptoms/{id}','diseasesSymptomsController@removeDiseasesSymptoms');

Route::post('/create-diseasesTreatment','diseasesTreatmentController@createDiseasesTreatment');
Route::patch('/change-diseasesTreatment/{id}','diseasesTreatmentController@changeDiseasesTreatment');
//Route::http('/remove-diseasesTreatment/{id}','diseasesTreatmentController@removeDiseasesTreatment');

Route::post('/create-patientsDiseases','patientsDiseasesController@createPatientsDiseases');
Route::patch('/change-patientsDiseases/{id}','patientsDiseasesController@changePatientsDiseases');
//Route::http('/remove-patientsDiseases/{id}','patientsDiseasesController@removePatientsDiseases');

Route::post('/create-patientsSigns','patientsSignsController@createPatientsSigns');
Route::patch('/change-patientsSigns/{id}','patientsSignsController@changePatientsSigns');
//Route::http('/remove-patientsSigns/{id}','patientsSignsController@removePatientsSigns');

Route::post('/create-patientsSymptoms','patientsSymptomsController@createPatientsSymptoms');
Route::patch('/change-patientsSymptoms/{id}','patientsSymptomsController@changePatientsSymptoms');
//Route::http('/remove-patientsSymptoms/{id}','patientsSymptomsController@removePatientsSymptoms');

Route::post('/create-management','managementController@createManagement');
Route::patch('/change-management/{id}','managementController@changeManagement');
//Route::http('/remove-management/{id}','managementController@removeManagement');

