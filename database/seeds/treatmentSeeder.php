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
        'name'=>'Oral antidiabetic drugs ',            
        ),
    array(
        'name'=>'Injected therapies'
    )       

    ));
    }
}
