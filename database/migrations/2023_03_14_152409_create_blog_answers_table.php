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
       Schema::create('blog_answers', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')
           ->references('id')
           ->on('users')
           ->onDelete('cascade')
           ->onUpdate('cascade');
           $table->foreignId('post_id')
           ->references('id')
           ->on('posts')
           ->onDelete('cascade')
           ->onUpdate('cascade');
           $table->string('answer', 300);
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('blog_answers');
   }
};


