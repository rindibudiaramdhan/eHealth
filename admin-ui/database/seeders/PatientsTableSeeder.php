<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Generate 50 sample records
        for ($i = 0; $i < 50; $i++) {
            DB::table('patients')->insert([
                'medical_record_number' => $faker->unique()->numerify('MRN######'),
                'name' => $faker->name,
                'nik' => $faker->nik,
                'birth_date' => $faker->date('Y-m-d', '2000-01-01'),
                'gender' => $faker->randomElement(['male', 'female']),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'emergency_contact' => $faker->name . ': ' . $faker->phoneNumber,
                'blood_type' => $faker->randomElement(['A', 'B', 'AB', 'O']),
                'allergies' => $faker->randomElement(['None', 'Peanuts', 'Seafood', 'Dust', 'Pollen']),
                'is_active' => $faker->boolean,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
