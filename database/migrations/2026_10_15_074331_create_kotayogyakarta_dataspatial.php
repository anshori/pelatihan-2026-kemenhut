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
        Schema::create('kotayogyakarta', function (Blueprint $table) {
            $table->id();
						$table->geometry('geom');
						$table->integer('fid');
						$table->bigInteger('kodeprov');
						$table->string('provinsi');
						$table->bigInteger('kodekab');
						$table->string('kabkot');
						$table->string('statuskab');
						$table->bigInteger('kodekec');
						$table->string('kecamatan');
						$table->string('kodedesast');
						$table->string('kodedesa');
						$table->string('desa');
						$table->string('desa_kota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotayogyakarta');
    }
};
