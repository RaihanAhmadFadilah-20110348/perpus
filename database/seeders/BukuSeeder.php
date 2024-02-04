<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'bahasa',
            'slug' => Str::slug('bahasa'),
            'sampul' => 'buku/bahasa1.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/teori_sosial.png',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/bahasa22.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/cakap_berbahasa_indonesia.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 5,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/dasar_pelayanan_perpustakaan.png',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/media_teknologi_pembelajaran.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 7,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/pai_hamka.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 8,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/sejarah_peradaban_islamcover.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 9,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/tek1.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 10,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/tek2.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 11,
            'stok' =>10
        ]);

        Buku::create([
            'judul' => 'teori',
            'slug' => Str::slug('teori'),
            'sampul' => 'buku/Umum2.jpg',
            'penulis' => 'raihan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' =>10
        ]);
    }
}
