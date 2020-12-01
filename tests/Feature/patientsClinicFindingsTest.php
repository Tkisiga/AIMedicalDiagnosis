<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\patientsClinicFindings;

class patientsClinicFindingsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createPatientsClinicFindings()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-patientsClinicFindings',[
            'patient_id'=>1,
            'clinic_findings_id'=>1,
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('patientsClinicFindings',['id'=>'1']);
      
    }
    /** @test */
    public function getPatientsClinicFindings(){
        $this->withoutExceptionHandling();
        $this->createpatientsClinicFindings();
        $response = $this->get('api/get-patientsClinicFindings');
        $response->assertStatus(200);
    }
    /** @test */
    public function changePatientsClinicFindings(){
        $this->withoutExceptionHandling();
        $this->createpatientsClinicFindings();
        $to_edit = patientsClinicFindings::first();
        $response = $this->patch('/change-patientsClinicFindings/'.$to_edit->id);
        $this->assertEquals('1', patientsClinicFindings::first()->id);
    }
    /** @test */
    public function removePatientsClinicFindings(){
        $this->withoutExceptionHandling();
        $this->createpatientsClinicFindings();
        $to_delete = patientsClinicFindings::first();
        $response=$this->delete('/delete-patientsClinicFindings/'.$to_delete->id);
        $this->assertCount(0,patientsClinicFindings::all());
    } 
}
