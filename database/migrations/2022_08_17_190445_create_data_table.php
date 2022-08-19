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
        Schema::create('data', function (Blueprint $table) {
           $table->string('Cargo_no')->unique();
            $table->string('Cargo_type');
            $table->string('Cargo_size');
            $table->string('Weight');
            $table->string('Remarks')->nullable();
            $table->string('Wharfage');
            $table->string('Penalty');
            $table->string('Storage');
            $table->string('Electricity');
            $table->string('Destuffing');
            $table->string('Lifting'); 
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
        Schema::dropIfExists('data');
    }
};
