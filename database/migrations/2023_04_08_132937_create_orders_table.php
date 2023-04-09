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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('name');
            $table->string('phone');
            $table->string('jemput');
            $table->string('tujuan');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->integer('medium')->nullable();
            $table->integer('bigbus')->nullable();
            $table->text('catatan')->nullable();
            $table->string('harga')->nullable();
            $table->enum('status', ['proses', 'cancel', 'aprove']);
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
        Schema::dropIfExists('orders');
    }
};
