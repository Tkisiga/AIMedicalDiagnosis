<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\visits;

class visitsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    /** @test */
    public function createVisits()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/create-visits',[
            'patient_id'=>1,
            'visit_date'=>'1/08/2020',
            'visit_category'=>'refill',
            'next_visit'=>'12/09/2020',
            'updated_by'=>1
            ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function getVisits(){
        $this->withoutExceptionHandling();
        $this->createVisits();
        $response = $this->get('api/get-visits');
        $response->assertOk();

    }

    /** @test*/
    public function changeVisits(){
        $this->withoutExceptionHandling();
        $this->createVisits();
        $to_edit= visits::first();
        $response= $this->patch('/change-visits/' .$to_edit->id,
        ['visit_date'=>'12/02/2020']);
        $response->assertEquals('1',visits::first()->id);
    }

    /** @test*/
    public function deleteVisits(){
        $this->withoutExceptionHandling();
        $this->createVisits();
        $to_edit= visits::first();
        $response= $this->delete('/delete-visits/' .$to_edit->id);
        $this->assertCount(0,visits::all());
    }
}
