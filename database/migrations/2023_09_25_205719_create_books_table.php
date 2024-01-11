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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('real_price')->nullable();
            $table->string('promotion_price')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->enum('status', ['Non actif', 'Actif'])->default('Non actif');
            $table->enum('type', ['Les livres', 'A paraître', 'Nouveautés', 'LivresHippo'])->default('Les livres');
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
        Schema::dropIfExists('books');
    }
};
