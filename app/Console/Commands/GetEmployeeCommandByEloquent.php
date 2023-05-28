<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class GetEmployeeCommandByEloquent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-employee-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /*
        \DB::enableQueryLog();
        $query = Employee::query();
        $query->where('department_id', 1);
        dd(\DB::getQueryLog());
        */
        \DB::enableQueryLog();
        Employee::find(1);
        dd(\DB::getQueryLog());
    }
}
