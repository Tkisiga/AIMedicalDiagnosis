<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\patients;

class patientsTest extends TestCase
{
    use RefreshDatabase;
    
        /** @test */
        public function createPatients(){
        $this->withoutExceptionHandling();   
        $response = $this->post('/create-patients',[
            'patient_id'=>1,
            'first_name'=>'Lilly',
            'last_name'=>'Katrina',
            'other_name'=>'',
            'age'=>'22',
            'phone_number'=>'0772694531',
            'gender'=>'Female',
            'updated_by'=>1,
        ]);
        $this->assertDatabaseHas('patients',['id'=>'1']);
       
    }
    /** @test */
    public function getPatient(){
        $this->createPatients();
        $this->withoutExceptionHandling();
        $response= $this->get('api/get-patient');
        $response->assertOk();
    }
    /** @test */
    public function changePatient(){
        $this->createPatients();
        $this->withoutExceptionHandling();
        $to_edit = patients::first();
        $response= $this->patch('/change-patient/'.$to_edit->id);
        $this->assertEquals('1',patients::first()->id);
    }
    
    /** @test*/
    public function removePatient(){
        $this->withoutExceptionHandling();
        $to_delete = patients::first();
        $response=$this->delete('/delete-patient/'.$to_delete->id);
        $this->assertCount(0,patients::all());

    }
}
