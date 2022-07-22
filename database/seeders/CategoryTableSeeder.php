<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();
        $id=DB::table('category')->insert(['category_name'=>'Elektronik','slug'=>'elektronik']);
        DB::table('category')->insert(['category_name'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-table','parent_id'=>$id]);
        DB::table('category')->insert(['category_name'=>'Telefon','slug'=>'telefon','parent_id'=>$id]);
        DB::table('category')->insert(['category_name'=>'TV/Ses','slug'=>'tv-ses','parent_id'=>$id]);
        $idK=DB::table('category')->insert(['category_name'=>'Kitap','slug'=>'kitap']);
        DB::table('category')->insert(['category_name'=>'Edebiyat','slug'=>'edebiyat','parent_id'=>$idK]);
        DB::table('category')->insert(['category_name'=>'Çocuk','slug'=>'cocuk','parent_id'=>$idK]);
        DB::table('category')->insert(['category_name'=>'DGS Hazırlık','slug'=>'dgs-hazirlik','parent_id'=>$idK]);
        DB::table('category')->insert(['category_name'=>'Dergi','slug'=>'dergi']);
        DB::table('category')->insert(['category_name'=>'Mobilya','slug'=>'mobilya']);
        DB::table('category')->insert(['category_name'=>'Dekorasyon','slug'=>'dekorasyon']);
        DB::table('category')->insert(['category_name'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('category')->insert(['category_name'=>'Kişisel Bakım','slug'=>'kisisel-bakim']);
        DB::table('category')->insert(['category_name'=>'Giyim & Moda','slug'=>'giyim-moda']);
        DB::table('category')->insert(['category_name'=>'Anne & Çocuk','slug'=>'anne-cocuk']);



    }
}
