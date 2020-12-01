<?php

use Illuminate\Database\Seeder;

class treatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('Treatment')->insert(array(
    array(
        'treatment_id'=>'TROO1',
        'name'=>'',            
        ),
    array(
        'treatment_id'=>'TROO2',
        'name'=>'',  
    ),
    array(
        'treatment_id'=>'TROO3',
        'name'=>'' 
    ),
    array(
        'treatment_id'=>'TROO4',
        'name'=>''  
    ),
    array(
        'treatment_id'=>'TROO5',
        'name'=>''
    ),
    array(
        'treatment_id'=>'TROO6',
        'name'=>''
    ),
    array(
        'treatment_id'=>'TROO7',
        'name'=>''
    ),
    array(
        'treatment_id'=>'TROO8',
        'name'=>''
    )       

    ));
    }
}
