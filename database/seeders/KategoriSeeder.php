<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = ['none', 'umum', 'agama', 'sosial', 'bahasa', 'teknologi', 'filsafat', 'Ensiklopedia', 'Biografi', 'kamus', 'motivasi', 'novel', 'komik', 'fotografi', 'tafsir'];

        foreach ($kategori as $value) {
            Kategori::create([
                'nama' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
