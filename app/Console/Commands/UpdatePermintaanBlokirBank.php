<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdatePermintaanBlokirBank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-permintaan-blokir-bank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Permintan Blokir Bank sudah dilakukan';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Permintan Blokir Bank sedang dilakukan.');

        // Contoh: Update data di database
        $this->blokirBank();

        $this->info('Permintan Blokir Bank sudah dilakukan.');
    }

    protected function blokirBank()
    {
        // Logika untuk mengupdate data
        // Misalnya, mengubah status atau memperbarui kolom tertentu
        DB::update('
                UPDATE skp
                JOIN bank ON skp.nik_nitku = bank.nik 
                SET nomor_surat_permintaan_blokir_bank = concat( "SBLOKIR-", LPAD( FLOOR( RAND() * 999999.99 ), 6, "0" ), "/SBLOKIR/KPP.0204/2024" ),
                tanggal_surat_permintaan_blokir_bank = NOW() 
                WHERE
                    nomor_ba_blokir IS NULL 
                    AND nomor_spmp IS NOT NULL 
                    AND nomor_baps IS NOT NULL
        ');
        // Atau bisa menggunakan logic lain, seperti:
        // YourModel::create([...]) untuk menambah data baru
    }
}
