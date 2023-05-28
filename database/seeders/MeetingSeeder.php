<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meetings = Meeting::factory()->count(50)->create();
        foreach ($meetings as $meeting) {
            $users = User::where('flg', 1)->take(rand(1, 10))->get('id');
            foreach ($users as $user) {
                $meeting->users()->attach($user->id);
            }
            $meeting->participants = $users->pluck('id');
            $meeting->save();
        }
    }
}
