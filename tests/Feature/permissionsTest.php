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
            'permission_ID'=>'ND01',
            'updated_by'=>'Dr.Hassan'
        ]);
        $this->assertDatabaseHas('Permissions', ['permission_ID'=>'ND01']);
       // $response->assertStatus(200);
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
        $this->assertEquals('ND01',permissions::first()->permission_ID);
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
