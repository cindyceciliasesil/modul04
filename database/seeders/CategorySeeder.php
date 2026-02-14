<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'nama_kategori' => 'Teknologi',
                'deskripsi' => 'Buku tentang pemrograman dan teknologi'
            ],
            [
                'nama_kategori' => 'Sains',
                'deskripsi' => 'Buku ilmiah dan pengetahuan alam'
            ],
            [
                'nama_kategori' => 'Sastra',
                'deskripsi' => 'Novel, cerpen, dan karya sastra'
            ],
        ]);
    }
}