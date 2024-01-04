<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
                'category' => '教材レビュー',
        ]);
        
        DB::table('categories')->insert([
                'category' => '受験体験談',
        ]);
        
        DB::table('categories')->insert([
                'category' => 'アウトプット',
        ]);
        
        DB::table('categories')->insert([
                'category' => '質問',
        ]);
        
        DB::table('categories')->insert([
                'category' => 'その他',
        ]);
    }
}
