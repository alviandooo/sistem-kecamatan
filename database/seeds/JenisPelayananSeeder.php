<?php

use Illuminate\Database\Seeder;

class JenisPelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ["Surat keterangan Nikah","Surat Keterangan Tidak Mampu","Surat Keterangan Tidak Memiliki Rumah","Surat Menikah","Surat Kematian",
        "Surat Keterangan Usaha","Surat KPR Rumah","Surat Izin Bangunan","Surat Pengantar SKCK","Surat Keramaian"];

        for ($i=0; $i < 10 ; $i++) { 
            DB::table('pelayanan')->insert([
                'jenis_pelayanan' => $data[$i]
            ]);
        }
        
    }
}
