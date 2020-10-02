<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\permissions;

class permissionsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createPermissions()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-permissions',[
            'permissions'=>'Insert',
            'permission_id'=>1,
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('Permissions', ['permission_id'=>'1']);
     
    }
    /** @test */
    public function getPermissions(){
        $this->withoutExceptionHandling();
        $this->createPermissions();
        $response=$this->get('api/get-permissions');
        $response->assertStatus(200);

    }
    /** @test */
    public function changePermissions(){
        $this->withoutExceptionHandling();
        $this->createPermissions();
        $to_edit=permissions::first();
        $response=$this->patch('/change-permissions/'.$to_edit->id);
        $this->assertEquals('1',permissions::first()->permission_id);
    }
     /** @test */
    public function deletePermissions(){
        $this->withoutExceptionHandling();
        $this->createPermissions();
        $to_edit=Permissions::first();
        $response=$this->delete('/delete-permissions/'.$to_edit->id);
        $this->assertCount(0,permissions::all());
        
    }
}
