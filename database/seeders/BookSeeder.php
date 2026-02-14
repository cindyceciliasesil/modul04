<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'category_id'=>1,
                'judul'=>'Laravel Dasar',
                'penulis'=>'Cindy Cecilia',
                'tahun_terbit'=>2024,
                'stok'=>5
            ],
            [
                'category_id'=>2,
                'judul'=>'Fisika Modern',
                'penulis'=>'Cindy Cecilia',
                'tahun_terbit'=>2020,
                'stok'=>3
            ],
            [
                'category_id'=>3,
                'judul'=>'Laskar Pelangi',
                'penulis'=>'Joulius Kelvin',
                'tahun_terbit'=>2005,
                'stok'=>4
            ],
        ]);
    }
}