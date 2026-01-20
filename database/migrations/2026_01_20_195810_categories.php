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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['service', 'product']);
            $table->tinyInteger('status')->default('0');
            $table->string('youtube_link')->nullable();
            $table->foreignId('created_by')
                        ->constrained( 'users',  'id')
                        ->onUpdate('cascade')
                        ->onDelete('restrict')->nullable();

            $table->foreignId('updated_by')
                        ->constrained( 'users',  'id')
                        ->onUpdate('cascade')
                        ->onDelete('restrict')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
          Schema::create('category_lang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('language')->index();
            $table->string('name');
            $table->string('summary')->nullable();
            $table->string('description')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
