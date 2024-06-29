<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Add News seeder
        $this->call([
            NewsSeeder::class,
        ]);

        // Add Notice seeder
        $this->call([
            NoticeSeeder::class,
        ]);

        // User::factory(10)->create();


        User::factory()->create([
            'user_id' => 'test',
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
