<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogAnswerSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
       DB::table('blog_answers')->insert([
           'user_id' => 1,
           'post_id'=> 1,
           'answer'=> 'hello',
       ]);
   }
}


