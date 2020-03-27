<?php

use Illuminate\Database\Seeder;
use \App\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i < 30; $i++) {
        $patient = new \App\Patient();
        $patient->name = 'Name_' . $i;
        $patient->surname = 'Surname_' . $i;
        $patient->embg = Str::random(13);
        $patient->doctor_id = rand(1,30);
        $patient->save();
    }
}
}
