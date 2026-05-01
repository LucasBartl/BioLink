<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Cada usuário do sistema cria um link factory
     */
    public function run(): void
    {
        User::all()
            ->each(function (User $user) {
                Link::factory()
                    ->count(random_int(5, 8))
                    ->create([
                        'user_id' => $user->id,
                    ]);
            });
    }
}
