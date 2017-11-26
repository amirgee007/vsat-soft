<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserTableSeeder::class);

        //code to automatic run the sql file and import all location
        //run php artisan db:Seed
        $path = 'locations_sql.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('-----locations_sql seeded!');
    }
}
