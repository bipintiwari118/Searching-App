<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker=Faker::create();
        for ($i=0; $i<30 ; $i++) {
            $student= new Student;
            $student->name=$faker->name;
            $student->phone=$faker->phoneNumber;
            $student->address=$faker->address;
            $student->save();
        }


    }
}
