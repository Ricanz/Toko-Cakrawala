<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('sub_judul')->nullable();
            $table->string('banner')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('tombol')->nullable();
            $table->string('link')->nullable();
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->string('role');
            $table->integer('urutan')->nullable();
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
        Schema::dropIfExists('banner');
    }
}
