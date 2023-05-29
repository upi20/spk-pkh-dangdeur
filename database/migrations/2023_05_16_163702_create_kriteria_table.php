<?php

use App\Models\Import\Kriteria as ImportKriteria;
use App\Models\Kriteria;
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
        Schema::create(Kriteria::tableName, function (Blueprint $table) {
            $table->id();
            $table->text('nama')->nullable()->default(null);
            $table->string('kode')->nullable()->default(null);
            $table->text('keterangan')->nullable()->default(null);
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();
            $table->foreign('import_id')->references('id')->on(ImportKriteria::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Kriteria::tableName);
    }
};
