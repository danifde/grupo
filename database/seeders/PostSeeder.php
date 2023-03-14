<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
       DB::table('posts')->insert([
           'user_id' => 1,
           'title'=> 'hola',
           'text_post'=> 'good',
       ]);
   }
}




