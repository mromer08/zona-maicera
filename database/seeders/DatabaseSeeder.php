<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Game::factory(1)->create();
        
        $users = \App\Models\User::get();        
        foreach ($users as $user) {
            \App\Models\Score::factory(1)->create([
                'game_id' => 1,
                'user_id' => $user->id,
                'total' => rand(20, 100)
            ]);
        }
    }
}
