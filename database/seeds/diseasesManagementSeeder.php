<?php

use Illuminate\Database\Seeder;

class diseasesManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DiseasesManagement')->insert(array(array(
            'disease_id'=>'MDOO1',
            'management_id'=>'MGT001'
        ),
    array(
        'disease_id'=>'MDOO2',
        'management_id'=>'MGT002'
    
    ),
    array(
        'disease_id'=>'MDOO3',
        'management_id'=>'MGT003'
    
    ),
    array(
        'disease_id'=>'MDOO4',
        'management_id'=>'MGT004'
    
    )
    ));
    }
}
