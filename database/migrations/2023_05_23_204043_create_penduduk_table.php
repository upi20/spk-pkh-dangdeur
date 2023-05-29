<?php

use App\Models\Penduduk;
use App\Models\Import\Penduduk as ImportPenduduk;
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
        Schema::create(Penduduk::tableName, function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->text('alamat')->nullable()->default(null);
            $table->integer('status')->unique()->nullable()->default(0)->comment('0 diproses, 1 Sesuai, 2 Tidak Sesuai');
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('import_id')->references('id')->on(ImportPenduduk::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Penduduk::tableName);
    }
};
