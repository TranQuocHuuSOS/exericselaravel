<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Lessor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('Lessor')->insert([[
        //     'Lessor_name'=>"Thu phan",
        //     'Lessor_email'=>"Thuphan@gmail.com",
        //     'Lessor_phone'=>"096614262",
        //     'Lessor_address'=>"Thu phan , Ngô Quyền",
        //     'Lessor_password'=>"123abc",

        // ],
        // [
        //     'Lessor_name'=>"Thu phan",
        //     'Lessor_email'=>"Th@gmail.com",
        //     'Lessor_phone'=>"096614262",
        //     'Lessor_address'=>"Thu phan , Ngô Quyền",
        //     'Lessor_password'=>"123abc",

        // ],
        // [
        //     'Lessor_name'=>"anh tran",
        //     'Lessor_email'=>"T@gmail.com",
        //     'Lessor_phone'=>"096614262",
        //     'Lessor_address'=>"Thu phan , Ngô Quyền",
        //     'Lessor_password'=>"123abc",

        // ]
        // ]

        $faker = Faker::create();

        // Thêm dữ liệu ngẫu nhiên vào bảng "renter"
        for ($i = 1; $i <= 100; $i++) {
          DB::table('Lessor')->insert([      
              'Lessor_name' => $faker->name,
              'Lessor_email' => $faker->email,
              'Lessor_phone' => $faker->phoneNumber,
              'Lessor_address' => $faker->address,
              'Lessor_password' => bcrypt($faker->password)
          ]);
      }
    
    }
}
