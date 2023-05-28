<?php

namespace App\Console\Commands;

use App\Models\Department;
use Illuminate\Console\Command;

class GetDepartmentWithEmployee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-department-with-employee';

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
        $departments = Department::take(4)->get();
        foreach ($departments as $key => $department) {
            $department->employees;
        }
        dd(\DB::getQueryLog());
    }
}
