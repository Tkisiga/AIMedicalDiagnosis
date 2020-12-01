<?php

use Illuminate\Database\Seeder;

class diseasesSignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DiseasesSigns')->insert(array(array(
            'disease_id'=>'MDOO1',
            'sign_id'=>'SN001',
            'sign_id'=>'SN002',
            'sign_id'=>'SN003',
            'sign_id'=>'SN004',
            'sign_id'=>'SN005',
            'sign_id'=>'SN006',
        ),
    array(
        'disease_id'=>'MDOO2',
        'sign_id'=>'SN002',
        'sign_id'=>'SN001',
        'sign_id'=>'SN003',
        'sign_id'=>'SN004',
        'sign_id'=>'SN005',
        'sign_id'=>'SN006',
    ),
    array(
        'disease_id'=>'MDOO3',
        'sign_id'=>'SN003',
        'sign_id'=>'SN002',
        'sign_id'=>'SN001',
        'sign_id'=>'SN004',
        'sign_id'=>'SN005',
        'sign_id'=>'SN009',    
    
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
