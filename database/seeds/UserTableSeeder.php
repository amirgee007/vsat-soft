<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'username' => 'seersol',
                    'email' => 'seersol@gmail.com',
                    'password' => bcrypt('123456'),
                    'created_at' => '2017-11-07 20:32:41',
                    'updated_at' => '2017-11-07 20:34:44',
                ),
        ));

        echo "user Login:       seersol@gmail.com";
        echo '----and-----';
        echo "Password:         123456";

    }
}
