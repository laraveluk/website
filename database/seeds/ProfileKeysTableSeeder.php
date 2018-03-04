<?php

use Illuminate\Database\Seeder;

class ProfileKeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    \App\Models\ProfileKey::create([
		    'name' => "first_name",
		    'type' => \App\Enums\ProfileKeys::TEXT
	    ]);

	    \App\Models\ProfileKey::create([
		    'name' => "last_name",
		    'type' => \App\Enums\ProfileKeys::TEXT
	    ]);

	    \App\Models\ProfileKey::create([
		    'name' => "age",
		    'type' => \App\Enums\ProfileKeys::NUMBER
	    ]);

	    \App\Models\ProfileKey::create([
		    'name' => "Bio",
		    'type' => \App\Enums\ProfileKeys::TEXTAREA
	    ]);
    }
}
