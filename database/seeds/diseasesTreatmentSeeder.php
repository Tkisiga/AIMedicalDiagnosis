<?php

use Illuminate\Database\Seeder;

class diseasesTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DiseasesTreatment')->insert(array(array(
            'disease_id'=>'MDOO1',
            'treatment_id'=>'TR001',
            'treatment_id'=>'TR0013',
            'treatment_id'=>'TR0012',
            'treatment_id'=>'TR004',
            'treatment_id'=>'TR000',
            'treatment_id'=>'TR006',
        ),
    array(
        'disease_id'=>'MDOO2',
        'treatment_id'=>'TR002',
        'treatment_id'=>'TR001',
        'treatment_id'=>'TR003',
        'treatment_id'=>'TR004',
        'treatment_id'=>'TR005',
        'treatment_id'=>'TR006',
    ),
    array(
        'disease_id'=>'MDOO3',
        'treatment_id'=>'TR003',
        'treatment_id'=>'TR002',
        'treatment_id'=>'TR001',
        'treatment_id'=>'TR004',
        'treatment_id'=>'TR005',
        'treatment_id'=>'TR009',    
    
    ),
    array(
        'disease_id'=>'MDOO4',
        'sign_id'=>'TR004',
        'sign_id'=>'TR002',
        'sign_id'=>'TR003',
        'sign_id'=>'TR001',
        'sign_id'=>'TR005',
        'sign_id'=>'TR0011',
    )
    ));
    }
}
