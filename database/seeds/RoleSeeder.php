<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Role::class)->create([
            'name' => 'Administrator',
        ]);
        
        factory(App\Models\Role::class)->create([
            'name' => 'Member',
        ]);
    }
}
