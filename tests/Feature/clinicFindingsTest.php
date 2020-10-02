<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\clinicFindings;

class clinicFindingsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createClinicFindingsTest()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-clinicFindingsTest',[
            'clinic_findings_id'=>1,
            'patient_history_id'=>1,
            'general_appearance_id'=>1,
            'physical_examination_id'=>1,
            'updated_by'=>1,
        ]);
        $this->assertDatabaseHas('ClinicFindings',['id'=>1]);
    }
    /** @test */
    public function getClinicFindings(){
        $this->createclinicFindings();
        $this->withoutexceptionHandling();
        $response=$this->get('api/get-clinicFindings/');
    }
    /** @test */
    public function changeClinicFindings(){
        $this->createclinicFindings();
        $this->withoutExceptionHandling();
        $to_edit= clinicFindings::first();
        $response=$this->patch('/change-clinicFindings/'.$to_edit->id);
        $this->assertEquals('1',clinicFindings::first()->id);
    }
    /** @test */
    public function deleteClinicFindings(){
        $this->createclinicFindings();
        $this->withoutExceptionHandling();
        $to_edit= clinicFindings::first();
        $response=$this->delete('/delete-clinicFindings/'.$to_edit->id);
        $this->assertCount(0,clinicFindings::all());
    }
}
