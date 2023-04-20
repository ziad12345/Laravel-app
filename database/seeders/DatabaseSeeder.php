<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        $user = User::factory()->create([
            "name" => "john doe",
            "email" => "john@gmail.com"
        ]);

        Listing::factory(6)->create([
            "user_id" => $user->id
        ]);

        // \App\Models\Listing::create([
        //     "title" => "laravel dev",
        //     "Tags" => "laravel, js",
        //     "company" => "laravel tech",
        //     "location" => "ca, eg",
        //     "email" => "email@gmail.com",
        //     "website" => "mywebsite.com",
        //     "description" => "hello this laravel product description, it's just a bunch of nonsense to waste your time"
        // ]);

        // \App\Models\Listing::create([
        //     "title" => "full-stack dev",
        //     "Tags" => "react, js",
        //     "company" => "react tech",
        //     "location" => "ca, eg",
        //     "email" => "email@gmail.com",
        //     "website" => "mywebsite.com",
        //     "description" => "hello this laravel product description, it's just a bunch of nonsense to waste your time"
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
