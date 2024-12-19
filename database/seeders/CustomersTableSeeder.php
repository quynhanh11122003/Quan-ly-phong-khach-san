<?php


Namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {   //mỗi lần chạy seeder tạo 10 bản ghi
            DB::table('customers')->insert([
                'Name' => $faker->name,
                'Email' => $faker->unique()->email, //unique để ko trùng
                'Phone' => $faker->unique()->phoneNumber,
            ]);
        }
    }
}
