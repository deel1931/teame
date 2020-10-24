<?php

use Illuminate\Database\Seeder;

class MentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentor')->insert([
            'name'=>'島村泰生',
            'email'=>'yasuon1931@gmail.com',
            'password'=>'taisei1931',
            'age'=>21,
            'gender'=>'男',
            'git'=>'なし',
            'qiita'=>'なし',
            'carrier'=>'パーソンリンクに内定をもらいインターン生として活動中',
            'like'=>'laravel',
            'contact'=>'zoom,gmail,line可能',
        ]);
    }
}
