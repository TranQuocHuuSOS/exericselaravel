<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Renter extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

// Thêm dữ liệu ngẫu nhiên vào bảng "Renter"
for ($i = 1; $i <= 100; $i++) {
    DB::table('Renter')->insert([
        'Renter_id' => $i,
        'Renter_name' => $faker->name,
        'Renter_email' => $faker->email,
        'Renter_phone' => $faker->unique()->numberBetween(1000000000, 9999999999),
        'Renter_address' => $faker->address,
        'Renter_password' => bcrypt($faker->password)
    ]);
}

      }
    }

