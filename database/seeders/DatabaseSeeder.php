<?php

namespace Database\Seeders;

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
        $this->call([
            CategoryTableSeeder::class,
            PostTableSeeder::class,
            PostImageTableSeeder::class,
            ContactTableSeeder::class,
            PostCommentsTableSeeder::class,
            
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
