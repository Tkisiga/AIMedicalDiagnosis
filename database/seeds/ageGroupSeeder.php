<?php

use Illuminate\Database\Seeder;

class ageGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('AgeGroup')->insert(array(array(
        'ageGroup_id'=>'AG01',
        'name'=>''
    ),
array(
    'ageGroup_id'=>'AG02',
        'name'=>''

),
array(
    'ageGroup_id'=>'AG03',
        'name'=>''

),
array(
    'ageGroup_id'=>'AG04',
        'name'=>''

)
));
    }
}
