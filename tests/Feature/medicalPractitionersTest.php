<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\medicalPractitioners;

class medicalPractitionersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function createMedicalPractitioners()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/create-medicalPractitioners',[
        'name'=>'Anita',
        'password'=>'**@l',
        'email'=>'anitak@gmail.com',
        'roleID'=>'Nurse',
        'phone_No'=>'0772171256',
        'updated_by'=>'Kyobutungi'
        ]);
        $this->assertDatabaseHas('MedicalPractitioners',['email'=>'anitak@gmail.com']);
        //$response->assertStatus(200);
    }
    /** @test */
    public function getMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $response=$this->get('api/get-medicalPractitioners');
        $response->assertStatus(200);
    }
    /** @test */
    public function changeMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $to_edit=medicalPractitioners::first();
        $response=$this->patch('/change-medicalPractitioners/'.$to_edit->id);
        $this->assertEquals('ND01',medicalPractitioners::first()->roleID);
    }
    /** @test */
    public function deleteMedicalPractitioners(){
        $this->withoutExceptionHandling();
        $this->createMedicalPractitioners();
        $to_edit=medicalPractitioners::first();
        $response=$this->delete('/delete-medicalPractitioners/'.$to_edit->id);
        $this->assertCount(0,medicalPractitioners::all());
    }
}
