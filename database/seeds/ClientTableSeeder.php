<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
          [
            'title' => 'mr',
            'name' => 'jay',
            'last_name' => 'syle',
            'address' => '7890 bion street',
            'city' => 'baton rouge',
            'state' => 'LA',
            'zip_code' => '8907',
            'email' => 'jay@example.com',

          ]);


        DB::table('clients')->insert(
          [
            'title' => 'ms',
            'name' => 'sandra',
            'last_name' => 'okafor',
            'address' => '7654 ohama street',
            'city' => 'new orleans',
            'state' => 'LA',
            'zip_code' => '9087',
            'email' => 'sandra@example.com',

          ]);


        DB::table('clients')->insert(
          [
            'title' => 'mrs',
            'name' => 'okonye',
            'last_name' => 'ndimma',
            'address' => '7213 ploat street',
            'city' => 'yuppy',
            'state' => 'HP',
            'zip_code' => '8900',
            'email' => 'okonye@example.com',

          ]);


    }
}
