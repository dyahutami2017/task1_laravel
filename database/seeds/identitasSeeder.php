<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class identitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for($i = 1; $i<=50;$i++){
            DB::table('identitas')->insert([
                'nama'=>$faker->name,
                'email'=>$faker->email,
                'telepon'=>$faker->phoneNumber,
            ]);
        }
    }
}
