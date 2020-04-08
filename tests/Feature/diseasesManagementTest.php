<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\diseasesManagement;

class diseasesManagementTest extends TestCase
{
    
    use RefreshDatabase;
    /** @test */
    public function createDiseasesManagement()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-diseasesManagement',[
            'disease_id'=>'D01',
            'management_id'=>'MNT01',
            'updated_by'=>'Dr.Nimurungi'
        ]);
        $this->assertDatabaseHas('diseasesManagement',['management_id'=>'MNT01']);
       // $response->assertStatus(200);
    }
    /** @test */
    public function getDiseasesManagement(){
        $this->withoutExceptionHandling();
        $this->createDiseasesManagement();
        $response = $this->get('api/get-diseasesManagement');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeDiseasesManagement(){
        $this->withoutExceptionHandling();
        $this->createDiseasesManagement();
        $to_edit = diseasesManagement::first();
        $response = $this->patch('/change-diseasesManagement/'.$to_edit->id);
        $this->assertEquals('MNT01', diseasesManagement::first()->management_id);
    }
    /** @test */
    public function removeDiseasesManagement(){
        $this->withoutExceptionHandling();
        $this->createDiseasesManagement();
        $to_delete = diseasesManagement::first();
        $response=$this->delete('/delete-diseasesManagement/'.$to_delete->id);
        $this->assertCount(0,diseasesManagement::all());
    } 
}
