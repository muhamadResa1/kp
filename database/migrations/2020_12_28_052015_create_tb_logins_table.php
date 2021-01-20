<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\tb_login;
use Illuminate\Support\Facades\Hash;

class CreateTbLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_logins', function (Blueprint $table) {
            $table->increments("id_user");
            $table->string("nama_lengkap");
            $table->string("foto");
            $table->string("username");
            $table->string("password");
            $table->string("role");
            $table->integer("active");
            $table->timestamps();
        });
        tb_login::create([
            "nama_lengkap" => "Muhammad Munzir",
            "foto" => "asdf",
            "username"=> "munzir",
            "password" => Hash::make("munzirdev"),
            "role" => "admin",
            "active" => 1,
        ]);
        tb_login::create([
            "nama_lengkap" => "Muns",
            "foto" => "sad",
            "username" => "user",
            "password" => Hash::make("e-budgeting"),
            "role" => "user",
            "active" => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_logins');
    }
}

