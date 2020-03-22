<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 50)->create();
        if (!\App\Models\User::whereEmail('egor@dotsblog.test')->first()) {
            factory(\App\Models\User::class, 1)->create([
                'email' => 'egor@dotsblog.test',
                'password' => Hash::make('egor@dotsblog.test'),
                'level' => \App\Models\User::LEVEL_ADMIN,
            ]);
        }
    }
}
