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
            'name'=>'Dieting',
            
        ),
    array(
        'name'=>'Lifestyle',    
        
    ),
    array(
        'name'=>'Exercises'    
    
    )          

    ));
    }
}
