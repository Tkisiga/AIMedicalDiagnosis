<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ageGroupTreatment;

class ageGroupTreatmentTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createAgeGroupTreatment()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-ageGroupTreatment',[
            'ageGroup_id'=>1,
            'treatment_id'=>1,
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('ageGroupTreatment',['id'=>'1']);
       
    }
    /** @test */
    public function getAgeGroupTreatment(){
        $this->withoutExceptionHandling();
        $this->createAgeGroupTreatment();
        $response = $this->get('api/get-ageGroupTreatment');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeAgeGroupTreatment(){
        $this->withoutExceptionHandling();
        $this->createAgeGroupTreatment();
        $to_edit = ageGroupTreatment::first();
        $response = $this->patch('/change-ageGroupTreatment/'.$to_edit->id);
        $this->assertEquals('1', ageGroupTreatment::first()->id);
    }
    /** @test */
    public function removeAgeGroupTreatment(){
        $this->withoutExceptionHandling();
        $this->createAgeGroupTreatment();
        $to_delete = ageGroupTreatment::first();
        $response=$this->delete('/delete-ageGroupTreatment/'.$to_delete->id);
        $this->assertCount(0,ageGroupTreatment::all());
    }
    
}
