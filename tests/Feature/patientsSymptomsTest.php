<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\patientsSymptoms;

class patientsSymptomsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createPatientsSymptoms()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-patientsSymptoms',[
            'patient_id'=>'P01',
            'symptom_id'=>'SM01',
            'updated_by'=>'Dr.Diana'
        ]);
        $this->assertDatabaseHas('patientsSymptoms',['patient_id'=>'P01']);
       // $response->assertStatus(200);
    }
    /** @test */
    public function getPatientsSymptoms(){
        $this->withoutExceptionHandling();
        $this->createPatientsSymptoms();
        $response = $this->get('api/get-patientsSymptoms');
        $response->assertStatus(200);
    }
    /** @test */
    public function changePatientsSymptoms(){
        $this->withoutExceptionHandling();
        $this->createPatientsSymptoms();
        $to_edit = patientsSymptoms::first();
        $response = $this->patch('/change-patientsSymptoms/'.$to_edit->id);
        $this->assertEquals('P01', patientsSymptoms::first()->patient_id);
    }
    /** @test */
    public function removePatientsSymptoms(){
        $this->withoutExceptionHandling();
        $this->createPatientsSymptoms();
        $to_delete = patientsSymptoms::first();
       // $response=$this->htpp('/delete-patientsSymptoms/'.$to_delete->id);
        //$this->assertCount(0,patientsSymptoms::all());
    } 
}
