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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedInteger('blog_id');
            $table->string('username');
            $table->string('comment');
            $table->unsignedInteger('parent_id')->NULL;
            $table->foreign('blog_id')->reference('id')->on('blog');
            $table->foreign('parent_id')->reference('comment_id')->on('comments');
            $table->timestamps();
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
