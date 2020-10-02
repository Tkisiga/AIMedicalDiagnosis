<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseasesClinicFindings;

class diseasesClinicFindingsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createDiseasesClinicFindings()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseasesClinicFindings',[
            'disease_id'=>1,
            'clinic_findings_id'=>1,
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('diseasesClinicFindings',['id'=>'1']);
     
    }
    /** @test */
    public function getDiseasesClinicFindings(){
        $this->withoutExceptionHandling();
        $this->creatediseasesClinicFindings();
        $response = $this->get('api/get-diseasesClinicFindings');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeDiseasesClinicFindings(){
        $this->withoutExceptionHandling();
        $this->creatediseasesClinicFindings();
        $to_edit = diseasesClinicFindings::first();
        $response = $this->patch('/change-diseasesClinicFindings/'.$to_edit->id);
        $this->assertEquals('1', diseasesClinicFindings::first()->id);
    }
    /** @test */
    public function removeDiseasesClinicFindings(){
        $this->withoutExceptionHandling();
        $this->creatediseasesClinicFindings();
        $to_delete = diseasesClinicFindings::first();
        $response=$this->delete('/delete-diseasesClinicFindings/'.$to_delete->id);
        $this->assertCount(0,diseasesClinicFindings::all());
    } 
}
