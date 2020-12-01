<?php

use Illuminate\Database\Seeder;

class signsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Signs')->insert(array(
            array(
                'sign_id'=>'SNOO1',
                'name'=>'',            
                ),
            array(
                'sign_id'=>'SNOO2',
                'name'=>'',  
            ),
            array(
                'sign_id'=>'SNOO3',
                'name'=>'' 
            ),
            array(
                'symptom_id'=>'SNOO4',
                'name'=>''  
            ),
            array(
                'sign_id'=>'SNOO5',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNOO6',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNOO7',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNOO8',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNOO9',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNOO10',
                'name'=>''
            ),
            array(
                'sign_id'=>'SNO011',
                'name'=>''
            ),                  
        
            ));
    }
}
