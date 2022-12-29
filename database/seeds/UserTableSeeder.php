<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'John',
            'email' => 'john@doe.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
