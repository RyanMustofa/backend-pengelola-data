<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('nama_pendaftar');
            $table->text('alamat_pendaftar');
            $table->string('tanggal_lahir');
            $table->string('nama_wali');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('status');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onEdit('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('formulirs');
    }
}
