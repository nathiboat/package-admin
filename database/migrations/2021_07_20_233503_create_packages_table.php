<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('')->nullable(false);
            $table->text('description')->nullable(false);
            $table->unsignedInteger('commitment_period')->default(0);
            $table->unsignedInteger('credits')->default(0);
            $table->tinyInteger('enabled')->nullable(false)->default(1);
            $table->unsignedInteger('sell_limit')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
