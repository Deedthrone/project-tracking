<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inbox;
use App\Models\Task;

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
            'excerpt' => 'Permisi mas tugas 1 buat aplikasi Project Tracking apakah sudah selesai?',
            'message' => 'Permisi mas tugas 1 buat aplikasi Project Tracking apakah sudah selesai? semisalkan sudah selesai segera kabari saya ya, saya akan buat desainnya'
        ]);

        Inbox::create([
            'name' => 'Mutia Habeahan',
            'slug' => 'chat-2',
            'excerpt' => 'Tolong segera selesaikan desain dari project tracking',
            'message' => 'Tolong segera selesaikan desain dari project tracking dikarenakan sudah hampir mencapai deadline!'
        ]);

        Inbox::create([
        'slug' => 'chat-3',
            'name' => 'Muchammad Muchlis',
            'excerpt' => 'Permisi pak, bolehkah saya bantu dalam meetingnya',
            'message' => 'Permisi pak, bolehkah saya bantu dalam meetingnya'
        ]);

        // Task::create([
        //     'judultask' => 'ini adalah tugas',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolore commodi placeat, sed fugit et ex doloribus deleniti aliquam autem praesentium incidunt odit, porro repellat quis rerum recusandae officiis rem. Veritatis minus nam, ad quos in cumque aspernatur blanditiis molestias ducimus explicabo ullam voluptate sequi assumenda eligendi quod asperiores! Nihil fugit cum repellat, aut at hic deserunt aliquid sint autem!',
        //     'priority' => 'red',
        //     'subtask' => 'menggambar'
 
            
        // ]);

        Task::create([
            'category' => 'Today',
            'titletask' => 'Tugas 1',
            'body' => 'Berisap siap untuk menyelesaikan project pada laravel ini pada tanggal 28',
            'subtask' => 'menggambar',
            'priority' => 'red'
        ]);

        Task::create([
            'category' => 'This Week',
            'titletask' => 'Tugas 2',
            'body' => 'Tugas kuliah merangkum pak Tutut',
            'subtask' => 'mewarnai',
            'priority' => 'yellow'
        ]);

        Task::create([
            'category' => 'This Month',
            'titletask' => 'Tugas 3',
            'body' => 'Pembuatan document MPDsI pada kelas pak Romeo',
            'subtask' => 'menulis',
            'priority' => 'green'
        ]);

        

        // Inbox::create([
        //     'slug' => 'chat-3',
        //     'name' => 'Muchammad Muchlis',
        //     'excerpt' => 'Lorem ipsum dolor sit amet',
        //     'message' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, ipsam?'
        // ]);
    }
}

