<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateSuratTeguran extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-surat-teguran';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update surat teguran';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Surat teguran sedang diperbarui.');

        // Contoh: Update data di database
        $this->updateData();

        $this->info('Surat teguran telah diperbarui.');
    }

    protected function updateData()
    {
        // Logika untuk mengupdate data
        // Misalnya, mengubah status atau memperbarui kolom tertentu
        DB::update('
                UPDATE skp
                SET nomor_surat_teguran = concat("S-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/TGRPNG/KPP.0204/2024"), tanggal_surat_teguran = DATE_ADD(skp.tanggal_ketetapan , INTERVAL 37 DAY)
                WHERE now()>DATE_ADD(skp.tanggal_ketetapan , INTERVAL 37 DAY)
                AND nomor_surat_teguran IS NULL
        ');
        // Atau bisa menggunakan logic lain, seperti:
        // YourModel::create([...]) untuk menambah data baru
    }
}
