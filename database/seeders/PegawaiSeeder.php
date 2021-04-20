<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'nip' => '1809002',
        	'nama' => 'gio',
        	'alamat' => 'Brebes'
        ]);
    }
}
