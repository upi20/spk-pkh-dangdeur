<?php

use App\Models\Penerima;
use App\Models\Import\Penerima as ImportPenerima;
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
        Schema::create(Penerima::tableName, function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique()->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->text('alamat')->nullable()->default(null);
            $table->integer('status')->nullable()->default(0)->comment('0 diproses, 1 Sesuai, 2 Tidak Sesuai');

            $table->integer('c1')->nullable()->default(0);
            $table->integer('c2')->nullable()->default(0);
            $table->integer('c3')->nullable()->default(0);
            $table->integer('c4')->nullable()->default(0);
            $table->integer('c5')->nullable()->default(0);
            $table->integer('c6')->nullable()->default(0);

            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('import_id')->references('id')->on(ImportPenerima::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Penerima::tableName);
    }
};
