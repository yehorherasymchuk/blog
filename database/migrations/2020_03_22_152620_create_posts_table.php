<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('status')->default(\App\Models\Post::STATUS_DRAFT);
            $table->string('locale');
            $table->string('slug');
            $table->string('title');
            $table->string('excerpt');
            $table->longText('body');
            $table->unsignedBigInteger('author_id');

            $table->softDeletes();
            $table->timestamps();

            $table->unique(['locale', 'slug']);

            $table->foreign('author_id')
                ->on('users')
                ->references('id')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
