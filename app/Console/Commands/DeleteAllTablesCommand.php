<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteAllTablesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all tables from database just for testing purpose';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach(\DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            \Schema::drop($table_array[key($table_array)]);
        }

        dd('all tables deleted from data base');
    }
}
