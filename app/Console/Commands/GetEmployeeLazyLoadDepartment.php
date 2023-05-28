<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class GetEmployeeLazyLoadDepartment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-employee-lazy-load-department';

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
        $employees = Employee::take(4)->get();
        foreach ($employees as $key => $employee) {
            $employee->department;
            throw new \Exception('hoge');
        }
        dd(\DB::getQueryLog());
    }
}
