<?php

use Illuminate\Database\Seeder;

class AuthenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authen')->delete();
        \DB::table('authen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'guid' => 'xxx01',
                'role' => '1',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            1 => 
            array (
                'id' => 2,
                'guid' => 'xxx02',
                'role' => '1,2',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            2 => 
            array (
                'id' => 3,
                'guid' => 'xxx03',
                'role' => '1,2',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
        ));
    }
}