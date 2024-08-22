<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'school_name'       => 'SMKN 2 Temanggung',
            'school_logo'       => 'PNG',
            'school_tagline'    => 'Learning is the path to Success',
            'school_description'=> 'SMK Negeri 2 Temanggung didirikan pada tanggal 20 November 1984, berdasarkan SK No.0559/O/1984. SMK Negeri 2 Temanggung sebelumnya adalah sekolah milik Pemerintah Daerah Tingkat II Temanggung dengan nama Sekolah Menengah Ekonomi Atas Pemerintah Daerah Tingkat II Temanggung.',
            'since'              => '1984-11-20'
        ]);
    }
}
