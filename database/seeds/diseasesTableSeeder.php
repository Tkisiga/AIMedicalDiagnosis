<?php

use Illuminate\Database\Seeder;
use App\diseases;
class diseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases_array = ['Typhoid','Measles','Corona','Polio'];

        for($i=0; $i<count($diseases_array); $i++){
            $disease = new diseases;
            $disease->disease_id = "MDOOL" . $i;
            $disease->name       = $diseases_array[$i];
            $disease->updated_by = 1;
            $disease->save();
        }
    }
}
