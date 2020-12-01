<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseases;


class diseasesTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createDiseases()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseases',[
            'disease_id'=>'D01',
            'name'=>'Tuberculosis',
            'updated_by'=>'Dr.Hassan'
        ]);
        $this->assertDatabaseHas('Diseases',['disease_id'=>'D01']);
      
    }
    /** @test */
    public function getDiseases(){
        $this->createDiseases();
        $this->withoutExceptionHandling();
        $response= $this->get('api/get-diseases');
        $response->assertOk();
    }
    /** @test */
    public function changeDiseases(){
        $this->createDiseases();
        $this->withoutExceptionHandling();
        $to_edit = diseases::first();
        $response= $this->patch('change-diseases/'.$to_edit->id);
        $this->assertEquals('D01',diseases::first()->disease_id);
    }
    /** @test */
    public function deleteDiseases(){
        $this->createDiseases();
        $this->withoutExceptionHandling();
        $to_delete=diseases::first();
        $response=$this->delete('delete-diseases/'.$to_delete->id);
        $this->assertCount(0,diseases::all());
    }
}
