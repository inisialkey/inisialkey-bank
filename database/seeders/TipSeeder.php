<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tips')->insert([
            [
                'title' => 'Cara menyimpan uang yang baik',
                'thumbnail' => 'nabung.jpg',
                'url' => 'https://www.cimbniaga.co.id/id/inspirasi/perencanaan/cara-menabung-yang-benar-menurut-pakar-keuangan',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'title' => 'Cara berinvestasi emas',
                'thumbnail' => 'emas.jpg',
                'url' => 'https://www.ocbc.id/id/individu/simpanan/tabungan-emas/tabunganemas-individu?gad_source=1&gclid=CjwKCAjwzIK1BhAuEiwAHQmU3n42PZhDIO22JTrFTs_6wYUrcPNKulSL26tkUy0j1EbbLJZH6kPUuxoC1fQQAvD_BwE',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'title' => 'Cara berinvestasi saham',
                'thumbnail' => 'saham.jpg',
                'url' => 'https://www.zurich.co.id/blog/articles/2019/08/6-cara-belajar-saham-untuk-para-pemula-yang-perlu-diperhatikan?gad_source=1&gclid=CjwKCAjwzIK1BhAuEiwAHQmU3ub95dsCGkNOtPG4mW-c2G7XrmJG_4qQO8VerznhI0UwlmUrob_2-xoClogQAvD_BwE',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
