<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Console\Command;

class GetEmployeeWithDepartment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-employee-with-department';

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
        $employees = Employee::with('department')->take(4)->get();
        /*foreach ($employees as $key => $employee) {
            $employee->department;
            throw new \Exception('hoge');
        }*/
        dd(\DB::getQueryLog());
    }
}
