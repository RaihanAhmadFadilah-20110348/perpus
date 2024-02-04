<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rak::create([
            'rak' => 0,
            'baris' => 0,
            'kategori_id' => 1,
            'slug' => 0
        ]);

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 1,
                'baris' => $i,
                'kategori_id' => 2,
                'slug' => 1 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 2,
                'baris' => $i,
                'kategori_id' => 3,
                'slug' => 2 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 3,
                'baris' => $i,
                'kategori_id' => 4,
                'slug' => 3 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 4,
                'baris' => $i,
                'kategori_id' => 5,
                'slug' => 4 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 5,
                'baris' => $i,
                'kategori_id' => 6,
                'slug' => 5 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 6,
                'baris' => $i,
                'kategori_id' => 7,
                'slug' => 6 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 7,
                'baris' => $i,
                'kategori_id' => 8,
                'slug' => 7 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 8,
                'baris' => $i,
                'kategori_id' => 9,
                'slug' => 8 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 9,
                'baris' => $i,
                'kategori_id' => 10,
                'slug' => 9 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 10,
                'baris' => $i,
                'kategori_id' => 11,
                'slug' => 10 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 11,
                'baris' => $i,
                'kategori_id' => 12,
                'slug' => 11 .'-' .$i
            ]);
        }

        for ($i=1; $i <= 5; $i++) { 
            Rak::create([
                'rak' => 12,
                'baris' => $i,
                'kategori_id' => 13,
                'slug' => 12 .'-' .$i
            ]);
        }
    }
}
