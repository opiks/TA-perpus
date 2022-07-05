<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id');
            $table->integer('type_id');
            $table->string('name');
            $table->longText('deskripsi')->nullable();
            $table->dateTime('tanggal_rilis')->nullable();
            $table->integer('total_page')->nullable();
            $table->longText('penerbit')->nullable();
            $table->longText('penulis')->nullable();
            $table->longText('book_photo')->nullable();
            $table->longText('book_photo_path')->nullable();
            $table->integer('book_total')->nullable();
            $table->integer('book_total_sisa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
