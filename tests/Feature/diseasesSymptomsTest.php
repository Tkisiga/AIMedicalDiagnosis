<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseasesSymptoms;

class diseasesSymptomsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createDiseasesSymptoms()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseasesSymptoms',[
            'disease_id'=>'D01',
            'symptom_id'=>'SM01',
            'updated_by'=>'Dr.Brave'
        ]);
        $this->assertDatabaseHas('diseasesSymptoms',['symptom_id'=>'SM01']);
       // $response->assertStatus(200);
    }
    /** @test */
    public function getDiseasesSymptoms(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSymptoms();
        $response = $this->get('api/get-diseasesSymptoms');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeDiseasesSymptoms(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSymptoms();
        $to_edit = diseasesSymptoms::first();
        $response = $this->patch('/change-diseasesSymptoms/'.$to_edit->id);
        $this->assertEquals('SM01', diseasesSymptoms::first()->symptom_id);
    }
    /** @test */
    public function removeDiseasesSymptoms(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSymptoms();
        $to_delete = diseasesSymptoms::first();
       // $response=$this->htpp('/delete-diseasesSymptoms/'.$to_delete->id);
        //$this->assertCount(0,diseasesSymptoms::all());
    } 
}
