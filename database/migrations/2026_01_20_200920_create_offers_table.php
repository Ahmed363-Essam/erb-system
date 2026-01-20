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

        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("slug", 255)->nullable();
            $table->tinyInteger("status")->default(1);
            $table->tinyInteger("weight_order")->default(10);
            $table->string("web_image", 255)->nullable();
            $table->string("mobile_image", 255)->nullable();
            $table->timestamp("start_date")->nullable();
            $table->timestamp("end_date")->nullable();
            $table->timestamp("published_at")->nullable();
            $table->foreignId('created_by')
                ->constrained('users','id')
                ->onUpdate('cascade')
                ->onDelete('restrict')->nullable();
            $table->foreignId('updated_by')
                ->constrained('users','id')
                ->onUpdate('cascade')
                ->onDelete('restrict')->nullable();
            $table->unique('slug');
            $table->index('status');

            $table->timestamps();
        });



        Schema::create('offers_lang', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->foreignId('parent_id')
                ->constrained('offers','id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string("language", 6);
            $table->string("title", 255)->nullable();
            $table->string("brief", 500)->nullable();
            $table->text("content")->nullable();
            $table->index('language');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
