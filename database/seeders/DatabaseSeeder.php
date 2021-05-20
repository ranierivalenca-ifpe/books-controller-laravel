<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('users')->insert([
        //         'name' => 'user' . $i,
        //         'email' => 'user'.$i.'@gmail.com',
        //         'password' => Hash::make('123'),
        //     ]);
        // }
        $this->call([
            UserSeeder::class,
            BookSeeder::class,
        ]);

    }
}
