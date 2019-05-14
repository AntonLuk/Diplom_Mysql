<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rooms')->delete();

        \DB::table('rooms')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'студия'
                ),
            1=>
                array(
                    'id' => 2,
                    'name' => '1'
                ),
            3=>
                array(
                    'id' => 3,
                    'name' => '2'
                ),
            4=>
                array(
                    'id' => 4,
                    'name' => '3'
                ),
//            5=>
//                array(
//                    'id' => 5,
//                    'name' => '4'
//                ),
//            6=>
//                array(
//                    'id' => 6,
//                    'name' => '5'
//                ),


        ));
    }
}
