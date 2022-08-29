<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DokumenPerencanaanManusiaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dokumen_perencanaan_manusia')->delete();
        
        \DB::table('dokumen_perencanaan_manusia')->insert(array (
            0 => 
            array (
                'created_at' => '2022-08-24 23:32:10',
                'file' => '729633120-Dokumen Pendukung 1 b-Pemeriksaan Kesehatan-1.pdf',
                'id' => '00a6c132-8881-4ef6-ae34-031271546f6d',
                'nama' => 'Dokumen Pendukung 1 b',
                'no_urut' => 1,
                'perencanaan_manusia_id' => 'e24a52eb-b522-4a5c-a03f-3e9d89f2eab0',
                'updated_at' => '2022-08-24 23:32:10',
            ),
            1 => 
            array (
                'created_at' => '2022-08-24 23:42:02',
                'file' => '608033394-Dokumen Pendukung 1 p-Memberikan sosialisasi kepada warga yang teridentifikasi gejala Schistosomiasis-1.pdf',
                'id' => '4d473653-c3b0-47ea-bd93-e26f855d6734',
                'nama' => 'Dokumen Pendukung 1 p',
                'no_urut' => 1,
                'perencanaan_manusia_id' => 'fc3995c2-d9bc-4a98-800b-1298f5ae1165',
                'updated_at' => '2022-08-24 23:42:02',
            ),
            2 => 
            array (
                'created_at' => '2022-08-24 23:35:20',
                'file' => '791694552-Dokumen Pendukung 1 p-Pengobatan pada warga yang terdampak Schistosomiasis-1.pdf',
                'id' => '9e6c1510-edec-43d1-a968-253929c211d2',
                'nama' => 'Dokumen Pendukung 1 p',
                'no_urut' => 1,
                'perencanaan_manusia_id' => '9c559147-af9e-4ce2-a414-17d2cfdd15f5',
                'updated_at' => '2022-08-24 23:35:20',
            ),
            3 => 
            array (
                'created_at' => '2022-08-24 23:26:52',
                'file' => '1630103863-Dokumen Pendukung 2 g-Pengambilan Tinja Di Desa Anca-2.pdf',
                'id' => 'acacd28f-c81b-49ce-b3aa-88dd911e6a5d',
                'nama' => 'Dokumen Pendukung 2 g',
                'no_urut' => 2,
                'perencanaan_manusia_id' => 'bac1eb88-fb66-4a73-b51d-2d6834470217',
                'updated_at' => '2022-08-24 23:26:52',
            ),
            4 => 
            array (
                'created_at' => '2022-08-24 23:26:52',
                'file' => '965491136-Dokumen Pendukung 1 r-Pengambilan Tinja Di Desa Anca-1.pdf',
                'id' => 'cb1af4c9-b6e3-4ed7-a6c4-9874f78ac008',
                'nama' => 'Dokumen Pendukung 1 r',
                'no_urut' => 1,
                'perencanaan_manusia_id' => 'bac1eb88-fb66-4a73-b51d-2d6834470217',
                'updated_at' => '2022-08-24 23:26:52',
            ),
            5 => 
            array (
                'created_at' => '2022-08-24 23:32:10',
                'file' => '1910042793-Dokumen Pendukung 2 r-Pemeriksaan Kesehatan-2.pdf',
                'id' => 'decbff67-4548-45d2-9605-f021b3f137dd',
                'nama' => 'Dokumen Pendukung 2 r',
                'no_urut' => 2,
                'perencanaan_manusia_id' => 'e24a52eb-b522-4a5c-a03f-3e9d89f2eab0',
                'updated_at' => '2022-08-24 23:32:10',
            ),
            6 => 
            array (
                'created_at' => '2022-08-24 23:45:49',
                'file' => '1364755112-Dokumen Pendukung 1 r-Melakukan survey pada warga yang telah sembuh dari gejala yang disebabkan Schistosomiasis-1.pdf',
                'id' => 'f7fcb4ab-d229-41dd-9d2d-cb747e4459f3',
                'nama' => 'Dokumen Pendukung 1 r',
                'no_urut' => 1,
                'perencanaan_manusia_id' => '00326039-0a88-495b-8670-2b9098ce4600',
                'updated_at' => '2022-08-24 23:45:49',
            ),
        ));
        
        
    }
}