<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Khutbah Jumat',
                'slug' => 'khutbah-jumat',
                'description' => 'Kumpulan khutbah Jumat dan ceramah mingguan',
                'color' => '#16a34a',
                'icon' => 'mosque',
                'is_active' => true,
            ],
            [
                'name' => 'Kajian Islam',
                'slug' => 'kajian-islam',
                'description' => 'Artikel dan materi kajian keislaman',
                'color' => '#0ea5e9',
                'icon' => 'book-open',
                'is_active' => true,
            ],
            [
                'name' => 'Pengumuman',
                'slug' => 'pengumuman',
                'description' => 'Pengumuman resmi dari pengurus masjid',
                'color' => '#f59e0b',
                'icon' => 'megaphone',
                'is_active' => true,
            ],
            [
                'name' => 'Kegiatan Masjid',
                'slug' => 'kegiatan-masjid',
                'description' => 'Laporan dan dokumentasi kegiatan masjid',
                'color' => '#8b5cf6',
                'icon' => 'calendar',
                'is_active' => true,
            ],
            [
                'name' => 'Ramadhan',
                'slug' => 'ramadhan',
                'description' => 'Konten khusus bulan suci Ramadhan',
                'color' => '#06b6d4',
                'icon' => 'moon',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'color' => $category['color'],
                'icon' => $category['icon'],
                'is_active' => $category['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}