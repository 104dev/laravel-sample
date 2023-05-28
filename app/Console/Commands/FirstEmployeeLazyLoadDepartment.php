<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FirstEmployeeLazyLoadDepartment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:first-employee-lazy-load-department';

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
        \DB::enableQueryLog();
        $employee = Employee::first();
        $department = $employee->department;
        var_dump($employee);
        dd(\DB::getQueryLog());
    }
}
