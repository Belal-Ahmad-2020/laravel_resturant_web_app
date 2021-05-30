<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ResturantListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $x = range(0, 100);
        while ($x<101) {
            DB::table('resturants')->insert([
                'name' => Str::random(4),
                'email' => Str::random(6).'@gmail.com',
                'address' => Str::random(10),
            ]);            
        }

    }
}
