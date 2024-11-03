<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateBlokirBank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-blokir-bank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bank sudah diblokir';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Bank sedang diblokir.');

        // Contoh: Update data di database
        $this->blokirBank();

        $this->info('Bank sudah diblokir.');
    }

    protected function blokirBank()
    {
        // Logika untuk mengupdate data
        // Misalnya, mengubah status atau memperbarui kolom tertentu
        DB::update('
                UPDATE skp 
                join bank on skp.nik_nitku = bank.nik
                SET nomor_ba_blokir = concat( "BLOKIR-", LPAD( FLOOR( RAND() * 999999.99 ), 6, "0" ), "/BLOKIR/KPP.0204/2024" ),
                tanggal_ba_blokir = NOW() 
                WHERE nomor_ba_blokir IS NULL and nomor_spmp is not null and nomor_baps is not null
        ');
        // Atau bisa menggunakan logic lain, seperti:
        // YourModel::create([...]) untuk menambah data baru
    }
}
