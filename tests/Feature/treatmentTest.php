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
            'treatment_id'=>'TMT01',
            'name'=>'vaccination',
            'updated_by'=>'Dr.Nsubuga'
        ]);
        $this->assertDatabaseHas('Treatment',['treatment_id'=>'TMT01']);
     
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
        $this->assertEquals('TMT01',treatment::first()->treatment_id);
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
