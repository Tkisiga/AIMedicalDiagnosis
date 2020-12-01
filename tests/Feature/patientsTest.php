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
            'patients_id'=>'P01',
            'age'=>'22',
            'sex'=>'Female',
            'medical_history'=>'Diabetes Patient',
            'lab_results'=>'Negative',
            'updated_by'=>'Dr.Sam',
        ]);
        $this->assertDatabaseHas('patients',['patients_id'=>'P01']);
       
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
        $this->assertEquals('P01',patients::first()->patients_id);
    }
    
    /** @test*/
    public function removePatient(){
        $this->withoutExceptionHandling();
        $to_delete = patients::first();
        $response=$this->delete('/delete-patient/'.$to_delete->id);
        $this->assertCount(0,patients::all());

    }
}
