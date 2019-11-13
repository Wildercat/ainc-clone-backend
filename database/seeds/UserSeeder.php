<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'abram',
            'email' => 'abram@abram'
        ]);
        factory(User::class)->create([
            'name' => 'wilder',
            'email' => 'wilder@wilder'
        ]);
        factory(User::class, 5)->create();
    }
}
