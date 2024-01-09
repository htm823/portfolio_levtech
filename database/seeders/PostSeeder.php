<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 2,
            'title' => '受験体験記',
            'body' => '受験しました',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'A1教材レビュー',
            'body' => 'A1おすすめ教材',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
