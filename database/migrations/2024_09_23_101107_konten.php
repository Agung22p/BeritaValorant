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
        Schema::create('konten', function (Blueprint $table) {

		$table->id();
		$table->string('judul',200);
		$table->text('keterangan');
		$table->text('foto');
		$table->string('slug',200);
		$table->string('id_kategori',20);
		$table->date('tanggal');
		$table->string('username',50);
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konten');
    }
};
