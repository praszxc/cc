<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pekerjaan;

class pekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pekerjaan::truncate();
        $csvData = fopen(base_path('database/csv/pekerjaan.csv'),'r');

        $transRaw = true;
        while (($data = fgetcsv($csvData,'555',',')) !== false) {
            if (! $transRaw) {
                pekerjaan::create([
                    'Kecamatan' => $data[1],
                    'Kelurahan' => $data[2],
                    'Belum/Tidak Bekerja' => $data[3],
                    'Aparatur Pejabat Negara' => $data[4],
                ]);
            }
            $transRaw = false;
        }
        fclose($csvData);
    }
}
