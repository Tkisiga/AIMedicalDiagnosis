<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\treatment;

class treatmentTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createTreatment()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-treatment',[
            'name'=>'vaccination',
            'updated_by'=>1
        ]);
        $this->assertDatabaseHas('Treatment',['id'=>'1']);
     
    }
    /** @test */
    public function getTreatment(){
        $this->withoutExceptionHandling();
        $this->createTreatment();
        $response=$this->get('api/get-treatment');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeTreatment(){
        $this->withoutExceptionHandling();
        $this->createTreatment();
        $to_edit=treatment::first();
        $response=$this->patch('/change-treatment/.'.$to_edit->id);
        $this->assertEquals('1',treatment::first()->id);
    }
    /** @test */
    public function removeTreatment(){
        $this->withoutExceptionHandling();
        $this->createTreatment();
        $to_edit=treatment::first();
        $response=$this->delete('/remove-treatment/.'.$to_edit->id);
        $this->assertCount(0,treatment::all());
    }
}
