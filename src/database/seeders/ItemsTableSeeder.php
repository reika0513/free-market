<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => '腕時計',
        'image' => '/home/kinugasa0513/coachtech/laravel/free-market/src/storage/Clock.jpg',
        'quality' => '良好',
        'content' => 'スタイリッシュなデザインのメンズ腕時計',
        'price' => '15000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'HDD',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
        'quality' => '目立った傷や汚れなし',
        'content' => '高速で信頼性の高いハードディスク',
        'price' => '5000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => '玉ねぎ3束',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
        'quality' => 'やや傷や汚れあり',
        'content' => '新鮮な玉ねぎ3束のセット',
        'price' => '300'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => '革靴',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
        'quality' => '状態が悪い',
        'content' => 'クラシックなデザインの革靴',
        'price' => '4000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'ノートPC',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
        'quality' => '良好',
        'content' => '高性能なノートパソコン',
        'price' => '45000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'マイク',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
        'quality' => '目立った傷や汚れなし',
        'content' => '高音質のレコーディング用マイク',
        'price' => '8000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'ショルダーバッグ',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
        'quality' => 'やや傷や汚れあり',
        'content' => 'おしゃれなショルダーバッグ',
        'price' => '3500'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'タンブラー',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
        'quality' => '状態が悪い',
        'content' => '使いやすいタンブラー',
        'price' => '500'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'コーヒーミル',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
        'quality' => '良好',
        'content' => '手動のコーヒーミル',
        'price' => '4000'

       ];
        DB::table('items')->insert($param);

        $param = [
        'name' => 'メイクセット',
        'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
        'quality' => '目立った傷や汚れなし',
        'content' => '便利なメイクアップセット',
        'price' => '2500'

       ];
        DB::table('items')->insert($param);

         $param = [
        'name' => '狼の絵',
        'image' => 'wlfe.png',
        'quality' => '目立った傷や汚れなし',
        'content' => 'きれいな狼が描かれている絵画',
        'price' => '5500'

       ];
        DB::table('items')->insert($param);
    }
}
