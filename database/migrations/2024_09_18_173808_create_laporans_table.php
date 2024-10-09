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
        Schema::create('laporans', function (Blueprint $table) {
            $table->uuid("id")->primary();
			$table->string("nama");
            $table->text("deskripsi");
			$table->date("tanggal");
            $table->json("foto")->nullable();
			$table->foreignUuid("bidang_id")->constrained();
			$table->foreignId("user_id")->constrained();
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
