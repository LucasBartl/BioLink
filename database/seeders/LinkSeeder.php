<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function (User $user) {
            foreach (range(1, random_int(5, 8)) as $key => $sort) {
                Link::factory()
                    ->create([
                        'user_id' => $user->id,
                        'sort' => $sort
                    ]);
            }
        });
    }
}
