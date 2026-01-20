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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->morphs('attachable');
            $table->string('collection_name')->nullable();
            $table->index(['attachable_type', 'attachable_id'], 'connect_attachable_type_attachable_id_idx');
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::connection('connect')->create('attachment_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attachment_id')->constrained('attachments')->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_extension')->nullable();
            $table->bigInteger('file_size')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('connect')->dropIfExists('attachments');
    }
};
