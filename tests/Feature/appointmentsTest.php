<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class appointmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    /** @test */
    public function createAppointments()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/create-appointments',[
            'patient_id'=>1,
            'medical_practitioner_id'=>1,
            'appointment_date'=>'1/08/2020',
            'appointment_time'=>'11:30',
            'status'=>'confirmed',
            'updated_by'=>1
            ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function getAppointments(){
        $this->withoutExceptionHandling();
        $this->createAppointments();
        $response = $this->get('api/get-appointments');
        $response->assertOk();

    }

    /** @test*/
    public function changeAppointments(){
        $this->withoutExceptionHandling();
        $this->createAppointments();
        $to_edit= appointments::first();
        $response= $this->patch('/change-appointments/' .$to_edit->id,
        ['appointment_date'=>'12/02/2020']);
        $response->assertEquals('1',appointments::first()->id);
    }

    /** @test*/
    public function deleteAppointments(){
        $this->withoutExceptionHandling();
        $this->createAppointments();
        $to_edit= appointments::first();
        $response= $this->delete('/delete-appointments/' .$to_edit->id);
        $this->assertCount(0,appointments::all());
    }
}
