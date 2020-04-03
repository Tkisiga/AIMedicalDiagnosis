<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\patientsSigns;

class patientsSignsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createPatientsSigns()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-patientsSigns',[
            'patient_id'=>'P01',
            'sign_id'=>'SN01',
            'updated_by'=>'Dr.Jane Ruth Achen '
        ]);
        $this->assertDatabaseHas('patientsSigns',['patient_id'=>'P01']);
       // $response->assertStatus(200);
    }
    /** @test */
    public function getPatientsSigns(){
        $this->withoutExceptionHandling();
        $this->createPatientsSigns();
        $response = $this->get('api/get-patientsSigns');
        $response->assertStatus(200);
    }
    /** @test */
    public function changePatientsSigns(){
        $this->withoutExceptionHandling();
        $this->createPatientsSigns();
        $to_edit = patientsSigns::first();
        $response = $this->patch('/change-patientsSigns/'.$to_edit->id);
        $this->assertEquals('P01', patientsSigns::first()->patient_id);
    }
    /** @test */
    public function removePatientsSigns(){
        $this->withoutExceptionHandling();
        $this->createPatientsSigns();
        $to_delete = patientsSigns::first();
       // $response=$this->htpp('/delete-patientsSigns/'.$to_delete->id);
        //$this->assertCount(0,patientsSigns::all());
    } 
}
