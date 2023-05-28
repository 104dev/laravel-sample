<?php

namespace App\Console\Commands;

use App\Models\Department;
use Illuminate\Console\Command;

class GetDepartmentLazyLoadEmployee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-department-lazy-load-employee';

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
        $departments = Department::with('employees')->take(4)->get();
        dd(\DB::getQueryLog());
    }
}
