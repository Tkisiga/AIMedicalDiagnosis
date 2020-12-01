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
            'management_id'=>1,
            'name'=>'SM01',
            'updated_by'=>1,
        ]);
        $this->assertDatabaseHas('management',['id'=>'1']);
       
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
        $this->assertEquals('1', management::first()->id);
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
