<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\roles;

class rolesTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createRoles()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-roles',[
            
            'title'=>'Doctor',
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('Roles',['id'=>'1']);
     
    }
    /** @test */
    public function getroles(){
        $this->withoutExceptionHandling();
        $this->createRoles();
        $response=$this->get('api/get-roles');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeRoles(){
        $this->withoutExceptionHandling();
        $this->createRoles();
        $to_edit=roles::first();
        $response=$this->patch('/change-roles/'. $to_edit->id);
        $this->assertEquals('1',roles::first()->id);
    }
    /** @test */
    public function deleteRoles(){
        $this->withoutExceptionHandling();
        $this->createRoles();
        $to_edit=roles::first();
        $response=$this->delete('/delete-roles/'. $to_edit->id);
        $this->assertCount(0,roles::all());
    }
}
