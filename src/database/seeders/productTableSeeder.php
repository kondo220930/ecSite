<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => '1',
            'name' => '赤のワンピース',
            'explanation' => 'スカートが長めのワンピースです。少し色が薄くなっていますが目立たないです。',
            'price' => '1000',
            'gender' => '女',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '2',
            'name' => '黒のジャンバー',
            'explanation' => '新品の黒のジャンバーです。',
            'price' => '2000',
            'gender' => '男',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '3',
            'name' => '着物',
            'explanation' => '花柄の着物です。汚れはありません。',
            'price' => '3000',
            'gender' => '女',
            'condition' => '中古品', 
        ]);
        Product::create([
            'id' => '4',
            'name' => 'ズボン',
            'explanation' => 'レディースのズボンです。',
            'price' => '4000',
            'gender' => '女',
            'condition' => '新品', 
        ]);
        Product::create([
            'id' => '5',
            'name' => '白のパーカー',
            'explanation' => '中古品ですが汚れはありません。真ん中に犬の顔がプリントされています。',
            'price' => '5000',
            'gender' => '男',
            'condition' => '中古品', 
        ]);
    }
}
