<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseasesSigns;

class diseasesSignsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createDiseasesSigns()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseasesSigns',[
            'disease_id'=>'D01',
            'sign_id'=>'SN01',
            'updated_by'=>'Dr.Alexis'
        ]);
        $this->assertDatabaseHas('diseasesSigns',['sign_id'=>'SN01']);
      
    }
    /** @test */
    public function getDiseasesSigns(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSigns();
        $response = $this->get('api/get-diseasesSigns');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeDiseasesSigns(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSigns();
        $to_edit = diseasesSigns::first();
        $response = $this->patch('/change-diseasesSigns/'.$to_edit->id);
        $this->assertEquals('SN01', diseasesSigns::first()->sign_id);
    }
    /** @test */
    public function removeDiseasesSigns(){
        $this->withoutExceptionHandling();
        $this->createDiseasesSigns();
        $to_delete = diseasesSigns::first();
        $response=$this->delete('/delete-diseasesSigns/'.$to_delete->id);
        $this->assertCount(0,diseasesSigns::all());
    } 
}
