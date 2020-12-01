<?php

use Illuminate\Database\Seeder;

class managementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Management')->insert(array(array(
            'management_id'=>'MGTOO1',
            'name'=>'',
            
        ),
    array(
        'management_id'=>'MGTOO2',
        'name'=>'',    
        
    ),
    array(
        'management_id'=>'MGTOO3',
        'name'=>''    
            
    
    ),
    array(
        'management_id'=>'MGTOO4',
        'name'=>''  
    ),
    array(
        'management_id'=>'MGTOO5',
        'name'=>''
    ),
    array(
        'management_id'=>'MGTOO6',
        'name'=>''
    ),
    array(
        'management_id'=>'MGTOO7',
        'name'=>''
    ),
    array(
        'management_id'=>'MGTOO8',
        'name'=>''
    ),
    array(
        'management_id'=>'MGTOO9',
        'name'=>''
    ),
    array(
        'management_id'=>'MGTOO10',
        'name'=>''
    ),            

    ));
    }
}
