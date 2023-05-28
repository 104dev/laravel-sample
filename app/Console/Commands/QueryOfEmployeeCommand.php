<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;

class QueryOfEmployeeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:query-of-employee-command';

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
        $query = Employee::query()->with('department');
        dd($query->department);
    }
}
