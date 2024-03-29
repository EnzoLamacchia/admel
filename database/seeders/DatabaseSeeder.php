<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\User::factory(10)->create();
        $this->call(CitiesSeeder::Class);
        $this->call(CountriesSeeder::Class);
        $this->call(VocabularySeeder::Class);
        $this->call(RoleSeeder::Class);
        $this->call(StatusSeeder::Class);
        $this->call(UserSeeder::Class);
        $this->call(UserProfileSeeder::Class);
    }
}
