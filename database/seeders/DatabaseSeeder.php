<?php

namespace Database\Seeders;
use App\Models\BlogPost;

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
        // Seed users
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '9861840689',
        ]);

        // Seed blog posts
        BlogPost::factory(10)->create();
    }
}
