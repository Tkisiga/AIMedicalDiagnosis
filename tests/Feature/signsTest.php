<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\signs;
use App\Http\Resources\signsReource;

class signsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function createSigns()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-signs',[
            'sign_id'=>'SN01',
            'name'=>'red eyes',
            'updated_by'=>'Dr.Ndugu'
        ]);
        $this->assertDatabaseHas('Signs',['sign_id'=>'SN01']);
        //$response->assertStatus(200);
    }
    /** @test */
    public function getSigns(){
        $this->withoutExceptionHandling();
        $this->createSigns();
        $response= $this->get('api/get-signs');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeSigns(){
        $this->withoutExceptionHandling();
        $this->createSigns();
        $to_edit= signs:: first();
        $response= $this->patch('/change-signs/'.$to_edit->id);
        $response->assertStatus(200);
    }
    /** @test */
    public function deleteSigns(){
        $this->withoutExceptionHandling();
        $this->createSigns();
        $to_edit= signs::first();
       // $response= $this->http('/delete-signs/'.$to_edit->id);
       //$this->assertCount(0,signs::all());
    }
}

