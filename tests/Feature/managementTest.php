<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\management;

class managementTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createManagement()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-management',[
            'management_id'=>'MGT01',
            'name'=>'SM01',
            'updated_by'=>'Dr.Rambo'
        ]);
        $this->assertDatabaseHas('management',['management_id'=>'MGT01']);
       
    }
    /** @test */
    public function getManagement(){
        $this->withoutExceptionHandling();
        $this->createManagement();
        $response = $this->get('api/get-management');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeManagement(){
        $this->withoutExceptionHandling();
        $this->createManagement();
        $to_edit = management::first();
        $response = $this->patch('/change-management/'.$to_edit->id);
        $this->assertEquals('MGT01', management::first()->management_id);
    }
    /** @test */
    public function removeManagement(){
        $this->withoutExceptionHandling();
        $this->createManagement();
        $to_delete = management::first();
        $response=$this->delete('/delete-management/'.$to_delete->id);
        $this->assertCount(0,management::all());
    } 
}
