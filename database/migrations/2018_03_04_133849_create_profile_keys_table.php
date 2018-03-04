<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->tinyInteger('type'); // Text / Number / TextArea etc (See App\Enums\ProfileKeys)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_keys');
    }
}
