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
                    'user_name' => 'amir',
                    'email' => 'amir@yahoo.com',
                    'password' => bcrypt('123456'),
                    'created_at' => '2017-11-07 20:32:41',
                    'updated_at' => '2017-11-07 20:34:44',
                ),
        ));

        echo "user Login:       amir@yahoo.com";
        echo '----and-----';
        echo "Password:         123456";

    }
}