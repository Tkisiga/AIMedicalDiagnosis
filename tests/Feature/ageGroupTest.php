<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ageGroup;

class ageGroupTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createAgeGroup()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-ageGroup',[
            'ageGroup_id'=>1,
            'age'=>'16',
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('ageGroup',['id'=>'1']);
       
    }
    /** @test */
    public function getAgeGroup(){
        $this->withoutExceptionHandling();
        $this->createAgeGroup();
        $response=$this->get('api/get-ageGroup');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeAgeGroup(){
        $this->withoutExceptionHandling();
        $this->createAgeGroup();
        $to_edit=ageGroup::first();
        $response=$this->patch('/change-ageGroup/'.$to_edit->id);
        $this->assertEquals('1',ageGroup::first()->id);
    }
    /** @test */
    public function deleteAgeGroup(){
        $this->withoutExceptionHandling();
        $this->createAgeGroup();
        $to_edit=ageGroup::first();
        $response=$this->delete('/delete-ageGroup/'.$to_edit->id);
        $this->assertCount(0,ageGroup::all());
    }
}
