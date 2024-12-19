<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $RoomType=['Standard','Deluxe','Suite'];
        $Available=['Available','Occupied','Under maintenance'];
        for ($i = 0; $i < 10; $i++) {   //mỗi lần chạy seeder tạo 10 bản ghi
            DB::table('rooms')->insert([
                "RoomNumber"=> $faker->numberBetween(100,200),
                "RoomType"=> $faker->randomElement($RoomType),    //random trong 1 mảng
                "Availability"=>$faker->randomElement($Available),
            ]);
        }
    }
}
