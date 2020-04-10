<?php

use Illuminate\Database\Seeder;

class ageGroupTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('AgeGroupTreatment')->insert(array(array(
            'ageGroup_id'=>'AG01',
            'treatment_id'=>''
        ),
    array(
        'ageGroup_id'=>'AG02',
        'treatment_id'=>''
    
    ),
    array(
        'ageGroup_id'=>'AG03',
        'treatment_id'=>''
    
    ),
    array(
        'ageGroup_id'=>'AG04',
        'treatment_id'=>''
    
    )
    ));
    }
}
