<?php

use App\Models\Penduduk;
use App\Models\PendudukNilai;
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
        Schema::create(PendudukNilai::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kriteria_id', false, true)->nullable()->default(null);
            $table->bigInteger('penduduk_id', false, true)->nullable()->default(null);
            $table->double('nilai')->nullable()->default(null);

            $table->timestamps();
            $table->unique(['kriteria_id', 'penduduk_id']);
            $table->foreign('kriteria_id')->references('id')->on(Kriteria::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('penduduk_id')->references('id')->on(Penduduk::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(PendudukNilai::tableName);
    }
};
