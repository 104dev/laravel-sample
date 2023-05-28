<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class FirstEmployeeWithDepartment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:first-employee-with-department';

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
