<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'id' => 1,
                'name' => 'white',
                'code' => 'ffffff',
            ],
            [
                'id' => 2,
                'name' => 'silver',
                'code' => 'c0c0c0',
            ],
            [
                'id' => 3,
                'name' => 'black',
                'code' => '000000',
            ],
            [
                'id' => 4,
                'name' => 'red',
                'code' => 'ff0000',
            ],
            [
                'id' => 5,
                'name' => 'orange',
                'code' => 'ffa500',
            ],
            [
                'id' => 6,
                'name' => 'yellow',
                'code' => 'ffff00',
            ],
            [
                'id' => 7,
                'name' => 'green',
                'code' => '008000',
            ],
            [
                'id' => 8,
                'name' => 'blue',
                'code' => '0000ff',
            ],
            [
                'id' => 9,
                'name' => 'deepskyblue',
                'code' => '00bfff',
            ],
            [
                'id' => 10,
                'name' => 'purple',
                'code' => '800080',
            ]
        ]);
    }
}
