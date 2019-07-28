<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedTinyInteger('sex');
            $table->unsignedTinyInteger('orient')->default(1);
            $table->unsignedTinyInteger('direct')->default(1);
            $table->unsignedTinyInteger('old');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('role')->default(0);
            $table->unsignedInteger('invited_by_id');
            $table->integer('rating')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('invited_by_id', 'users_invited_by_id_fkey')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realty_objects', function(Blueprint $table)
        {
            $table->dropForeign('users_invited_by_id_fkey');
        });
        Schema::dropIfExists('users');
    }
}
