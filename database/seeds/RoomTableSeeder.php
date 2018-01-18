<?php

use Illuminate\Database\Seeder;


class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert(
          [
            'name' => '203',
            'floor' => 2,
            'description' => '',

          ]);

         DB::table('rooms')->insert(
          [
            'name' => '204',
            'floor' => 2,
            'description' => '',

          ]);

         DB::table('rooms')->insert(
          [
            'name' => '205',
            'floor' => 2,
            'description' => '',

          ]);
    }
}
