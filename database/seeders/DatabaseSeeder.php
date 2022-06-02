<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Petugas;
use App\Models\Spp;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Muhamad Al Kausar Ramadhan',
            'email' => 'alka@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        

        Kelas::create([
            'nama_kelas' => 'XII RPL 1'
        ]);
        
        Kelas::create([
            'nama_kelas' => 'XII RPL 2'
        ]);
        
        Kelas::create([
            'nama_kelas' => 'XII RPL 3'
        ]);
        
        Kelas::create([
            'nama_kelas' => 'XII RPL 4'
        ]);

        Siswa::create([
            'nim' => 2041720193,
            'nama_murid' => 'Bruno Sanjoyo',
            'agama' => 'islam',
            'tanggal_lahir' => '2002-03-11',
            'tempat_lahir' => 'Depok',
            'email' => 'bruno@gmail.com',
            'nomor_hp' => '0823174421',
            'password' => bcrypt(12345678),
            'umur' =>  17,
            'kelas_id' =>  1,
        ]);

        Siswa::create([
            'nim' => 2041720194,
            'nama_murid' => 'Sanjoyo Miro',
            'agama' => 'islam',
            'tanggal_lahir' => '2002-11-11',
            'tempat_lahir' => 'Bogor',
            'email' => 'sanjoyo@gmail.com',
            'nomor_hp' => '0885731928',
            'password' => bcrypt(12345678),
            'umur' =>  17,
            'kelas_id' =>  2,
        ]);

        Siswa::create([
            'nim' => 2041720195,
            'nama_murid' => 'Putri Lestari',
            'agama' => 'islam',
            'tanggal_lahir' => '2002-09-15',
            'tempat_lahir' => 'Bandung',
            'email' => 'putri@gmail.com',
            'nomor_hp' => '088127453',
            'password' => bcrypt(12345678),
            'umur' =>  17,
            'kelas_id' =>  1,
        ]);

        Petugas::create([
            'nipd' => 178392210,
            'nama_petugas' => 'Kevin Sanjaya',
            'password' => bcrypt('12345678')
        ]);

        Spp::create([
            'tahun_ajaran' => 2022,
            'bulan' => 'Febuari',
            'batas_pembayaran' => '2022-02-27',
            'jumlah_pembayaran' => 450000
        ]);
        
    }
}
