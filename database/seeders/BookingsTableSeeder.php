<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {   //mỗi lần chạy seeder tạo 10 bản ghi
            DB::table('bookings')->insert([
                'CustomerID' => $faker->numberBetween(1,10), //unique để ko trùng
                'RoomID' => $faker->numberBetween(1,10),
                'CheckinDate' => $faker->dateTimeBetween('-30days','now'),
                'CheckoutDate' => $faker->dateTimeBetween('-30days','now'),
            ]);
        }
    }
}
