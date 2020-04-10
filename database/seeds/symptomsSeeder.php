<?php

use Illuminate\Database\Seeder;

class symptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Symptoms')->insert(array(
            array(
                'symptom_id'=>'SMOO1',
                'name'=>'',            
                ),
            array(
                'symptom_id'=>'SMOO2',
                'name'=>'',  
            ),
            array(
                'symptom_id'=>'SMOO3',
                'name'=>'' 
            ),
            array(
                'symptom_id'=>'SMOO4',
                'name'=>''  
            ),
            array(
                'symptom_id'=>'SMOO5',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMOO6',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMOO7',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMOO8',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMOO9',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMOO10',
                'name'=>''
            ),
            array(
                'symptom_id'=>'SMO011',
                'name'=>''
            ),                  
        
            ));
    }
}
