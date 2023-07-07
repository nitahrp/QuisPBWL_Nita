<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_users', function(Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_nama');
            $table->string('user_alamat');
            $table->string('user_hp');
            $table->string('user_pos');
            $table->string('user_role');
            $table->string('user_aktif');
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
