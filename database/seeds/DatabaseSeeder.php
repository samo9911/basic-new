<?php

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
        // $this->call(UserSeeder::class);
    App\User::create([
        'name' => 'Samuel De Fermin',
        'email' => 's@admin.com',
        'password' => bcrypt('123456'),
    ])

    }
}
