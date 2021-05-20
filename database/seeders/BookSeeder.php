<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            \App\Models\Book::factory(1)->create([
                'user_id' => \App\Models\User::all()->random()
            ]);
        }
    }
}
