<?php

use Illuminate\Database\Seeder;

class diseasesSymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DiseasesSymptoms')->insert(array(array(
            'disease_id'=>'MDOO1',
            'symptom_id'=>'SM001',
            'symptom_id'=>'SM002',
            'symptom_id'=>'SM003',
            'symptom_id'=>'SM004',
            'symptom_id'=>'SM005',
            'symptom_id'=>'SM006',
        ),
    array(
        'disease_id'=>'MDOO2',
        'symptom_id'=>'SM002',
        'symptom_id'=>'SM001',
        'symptom_id'=>'SM003',
        'symptom_id'=>'SM004',
        'symptom_id'=>'SM005',
        'symptom_id'=>'SM006',
    ),
    array(
        'disease_id'=>'MDOO3',
        'symptom_id'=>'SM003',
        'symptom_id'=>'SM002',
        'symptom_id'=>'SM001',
        'symptom_id'=>'SM004',
        'symptom_id'=>'SM005',
        'symptom_id'=>'SM009',    
    
    ),
    array(
        'disease_id'=>'MDOO4',
        'sign_id'=>'SN004',
        'sign_id'=>'SN002',
        'sign_id'=>'SN003',
        'sign_id'=>'SN001',
        'sign_id'=>'SN005',
        'sign_id'=>'SN0011',
    )
    ));
    }
}
