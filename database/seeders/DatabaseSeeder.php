<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Laporan;
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
         User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('sawahlope')
        ]);
        User::create([
            'name' => 'Arip Rahman',
            'username' => 'ariprahman',
            'email'=> 'ariprahman@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Wasdiana',
            'username' => 'wasdiana',
            'email'=> 'wasdiana@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Alvin Herdiansyah',
            'username' => 'alvinherdiansyah',
            'email'=> 'alvinherdiansyah@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Ghyar Mahardika',
            'username' => 'ghyarmahardika',
            'email'=> 'ghyarmahardika@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::factory(3)->create();

        
         Category::create([
            'name' => 'Hiburan',
            'slug' => 'hiburan'

        ]);

        Category::create([
            'name' => 'Informasi',
            'slug' => 'informasi'
        ]);

        // Post::factory(25)->create();

    }
}
