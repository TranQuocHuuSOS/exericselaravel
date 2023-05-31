<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Property extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Thêm dữ liệu ngẫu nhiên vào bảng "Property"
        for ($i = 1; $i <= 100; $i++) {
            DB::table('Property')->insert([
                // 'property_id' => $i,
                'price' => $faker->randomFloat(2, 1000, 10000),
                'description' => $faker->text,
                'room_count' => $faker->numberBetween(1, 5),
                'area' => $faker->numberBetween(50, 200),
                
            ]);
        }
    }
}
