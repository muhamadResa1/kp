<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPBUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_p_b_u_s', function (Blueprint $table) {
            $table->increments("id");
            $table->string("kode_apbu");
            $table->string("nama_apbu");
            $table->string("tahun_akademik");
            $table->string("nominal");
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
        Schema::dropIfExists('a_p_b_u_s');
    }
}
