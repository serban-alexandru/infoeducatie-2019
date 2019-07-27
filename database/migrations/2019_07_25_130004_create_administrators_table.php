<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> string('email')->unique()->nullable();
            $table -> string('phone_number')->nullable();
            $table -> string('code')->nullable();
            $table -> string('expire_code')->nullable();
            $table -> string('password')->nullable();

            $table -> integer('role_id') -> default(0); // 0 - user / 1 - profesor / doctor / 2 - admin
            $table -> integer('target') -> nullable(); // 1 - slabit / 2 -mentinere / 3 - pune masa
            $table -> string('language') -> default('Romanian'); // Romanian / English
            $table -> string('city') -> nullable();
            $table -> string('country') -> nullable(); // sau 'Alta';
            $table -> tinyInteger('gender') -> nullable(); // 1 - barbat / 2 - femeie
            $table -> integer('age') -> nullable(); // ani
            $table -> integer('weight') -> nullable(); // kg
            $table -> integer('height') -> nullable(); // cm
            $table -> integer('lifestyle') -> nullable();
            $table -> rememberToken();
            $table -> timestamps();
        });
    }
/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}
