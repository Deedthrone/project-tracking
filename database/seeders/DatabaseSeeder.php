<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inbox;

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

        Inbox::create([
            'name' => 'Yosua Christopher',
            'slug' => 'chat-1',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, ipsam?'
        ]);

        Inbox::create([
            'name' => 'Mutia Habeahan',
            'slug' => 'chat-2',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, ipsam?'
        ]);

        Inbox::create([
            'slug' => 'chat-3',
            'name' => 'Muchammad Muchlis',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, ipsam?'
        ]);
    }
}

