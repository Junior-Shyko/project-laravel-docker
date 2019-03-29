<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Condominium\Condominium;

class CondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) { 
            Condominium::insert([
                'condominium_name' => $faker->name,
                'condominium_address'=> $faker->address,                             
                'condominium_number'=> $faker->randomDigitNotNull,
                'condominium_district'=> $faker->citySuffix,
                'condominium_city'=> $faker->city,
                'condominium_state'=> $faker->state,
                'condominium_cep'=> $faker->randomNumber($nbDigits = 8, $strict = true), 
                'condominium_photo' => $faker->word                                             
            ]);
        }
    }
}
