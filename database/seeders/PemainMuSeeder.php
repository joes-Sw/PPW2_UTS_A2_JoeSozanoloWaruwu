<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainMuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemain = collect([
            [
                'id' => '1',
                'nama_pemain' => 'antonius',
                'no_punggung' => '7',
                'posisi' => 'striker handal',
            ],
            [
                'id' => '2',
                'nama_pemain' => 'budi',
                'no_punggung' => '7',
                'posisi' => 'striker handal',
            ],
            [
                'id' => '3',
                'nama_pemain' => 'ikmal',
                'no_punggung' => '7',
                'posisi' => 'back handal',
            ],
            [
                'id' => '4',
                'nama_pemain' => 'akmal',
                'no_punggung' => '7',
                'posisi' => 'kiper handal',
            ],
            [
                'id' => '5',
                'nama_pemain' => 'rofi ',
                'no_punggung' => '7',
                'posisi' => 'striker handal',
            ],
        ]);

        $pemain->each(fn ($put) => DB::table('pemainmu')->insert($put));
    }
}
