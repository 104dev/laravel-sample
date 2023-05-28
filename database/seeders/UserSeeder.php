<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $followed = User::factory()->flg()->count(10)->has(Post::factory(rand(0, 200))->count(rand(30, 100)))->create();
        User::factory()->count(1000)->create()->each(function ($following) use ($followed) {
            $following
                ->following()
                ->attach($followed->random(random_int(0, 10)));
        });
    }
}
