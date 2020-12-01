<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(diseasesTableSeeder::class);
        $this->call(ageGroupSeeder::class);
        $this->call(ageGroupTreatmentSeeder::class);
        $this->call(diseasesManagementSeeder::class);
        $this->call(diseasesSignsSeeder::class);
        $this->call(diseasesSymptomsSeeder::class);
        $this->call(diseasesTreatmentSeeder::class);
        $this->call(managementSeeder::class);
        $this->call(medicalPractitionersSeeder::class);
        $this->call(patientsDiseasesSeeder::class);
        $this->call(patientsSeeder::class);
        $this->call(patientsSignsSeeder::class);
        $this->call(patientsSymptomsSeeder::class);
        $this->call(permissionsSeeder::class);
        $this->call(rolesSeeder::class);
        $this->call(signsSeeder::class);
        $this->call(symptomsSeeder::class);
        $this->call(treatmentSeeder::class);
    }
}
