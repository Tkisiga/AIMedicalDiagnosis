<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\symptoms;

class symptomsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createSymptoms()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-symptoms',[
            'symptom_id'=>'SM01',
            'name'=>'headache',
            'updated_by'=>'Dr.Said'
        ]);
        $this->assertDatabaseHas('Symptoms',['symptom_id'=>'SM01']);
    }
    /** @test */
    public function getSymptoms(){
        $this->createSymptoms();
        $this->withoutexceptionHandling();
        $response=$this->get('api/get-symptoms/');
    }
    /** @test */
    public function changeSymptoms(){
        $this->createSymptoms();
        $this->withoutExceptionHandling();
        $to_edit= symptoms::first();
        $response=$this->patch('/change-symptoms/'.$to_edit->id);
        $this->assertEquals('SM01',symptoms::first()->symptom_id);
    }
    /** @test */
    public function deleteSymptoms(){
        $this->createSymptoms();
        $this->withoutExceptionHandling();
        $to_edit= symptoms::first();
        $response=$this->delete('/delete-symptoms/'.$to_edit->id);
        $this->assertCount(0,symptoms::all());
    }
}
