<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index()
    {
        $jumlah_saldo_piutang_bruto = DB::select('select sum(saldo_piutang)/1000000000 as saldo_piutang from skp'); 
        $penyisihan_piutang = DB::select('select sum(penyisihan_piutang)/1000000000 as penyisihan_piutang from skp'); 
        $jumlah_tunggakan_paksa = DB::select('
                        SELECT
                    count(*) as jumlah_tunggakan_paksa
                FROM
                    skp
                    LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku )  
                WHERE
                    penerimaan.nomor_ketetapan IS NULL and skp.nomor_surat_teguran is not null and skp.nomor_ba_pemberitahuan_sp is null limit 100
        ');

        $jumlah_tunggakan_sita = DB::select('
                        SELECT
                            count(*) jumlah_tunggakan_sita 
                        FROM
                            skp
                            LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku ) 
                        WHERE
                            penerimaan.nomor_ketetapan IS NULL 
                            AND skp.nomor_surat_paksa IS NOT NULL and skp.nomor_spmp is null
        ');

        $jumlah_tunggakan_blokir = DB::select('
                        SELECT
                            count(*) as jumlah_tunggakan_blokir 
                        FROM
                            skp
                            LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku )
                            JOIN bank ON skp.nik_nitku = bank.nik 
                        WHERE
                            penerimaan.nomor_ketetapan IS NULL 
                            AND skp.nomor_spmp IS NOT NULL
        ');

        $jumlah_tunggakan_baps = DB::select('
                        SELECT
                            count(*) as jumlah_tunggakan_baps 
                        FROM
                            skp
                            LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku ) 
                        WHERE
                            penerimaan.nomor_ketetapan IS NULL 
                            AND skp.nomor_spmp IS NOT NULL and skp.nomor_baps is null  
        ');

        $jumlah_tunggakan_non_lelang = DB::select('
                        SELECT
                            count(*) as jumlah_tunggakan_non_lelang 
                        FROM
                            skp
                            LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang ) 
                            AND penerimaan.nik_nitku = skp.nik_nitku
                            LEFT JOIN bank ON skp.nik_nitku = bank.nik 
                        WHERE
                            penerimaan.nomor_ketetapan IS NULL 
                            AND skp.nomor_surat_permintaan_blokir_bank IS NOT NULL
        ');

        $jumlah_data_bank = DB::select('select count(*) jumlah_data_bank from bank'); 
        $jumlah_data_pengadilan_niaga = DB::select('select count(*) jumlah_data_pengadilan_niaga from pengadilan_niaga'); 
        $jumlah_data_imigrasi = DB::select('select count(*) jumlah_data_imigrasi from imigrasi'); 
        $jumlah_data_ahu = DB::select('select count(*) jumlah_data_ahu from ahu'); 
        $jumlah_data_polri = DB::select('select count(*) jumlah_data_polri from polri'); 
        $jumlah_data_bpn = DB::select('select count(*) jumlah_data_bpn from bpn'); 
        $jumlah_data_bursa_efek_indonesia = DB::select('select count(*) jumlah_data_bursa_efek_indonesia from bursa_efek_indonesia'); 
        $jumlah_data_bc_peb = DB::select('select count(*) jumlah_data_bc_peb from bc_peb'); 
        $jumlah_data_bc_pib = DB::select('select count(*) jumlah_data_bc_pib from bc_pib'); 
        
        return view('home.index', [
            'jumlah_saldo_piutang_bruto' => $jumlah_saldo_piutang_bruto,
            'penyisihan_piutang' => $penyisihan_piutang,
            'jumlah_tunggakan_paksa' => $jumlah_tunggakan_paksa,
            'jumlah_tunggakan_sita' => $jumlah_tunggakan_sita,
            'jumlah_tunggakan_baps' => $jumlah_tunggakan_baps,
            'jumlah_tunggakan_blokir' => $jumlah_tunggakan_blokir,
            'jumlah_tunggakan_non_lelang' => $jumlah_tunggakan_non_lelang,
            'jumlah_data_bank' => $jumlah_data_bank,
            'jumlah_data_pengadilan_niaga' => $jumlah_data_pengadilan_niaga,
            'jumlah_data_imigrasi' => $jumlah_data_imigrasi,
            'jumlah_data_ahu' => $jumlah_data_ahu,
            'jumlah_data_polri' => $jumlah_data_polri,
            'jumlah_data_bpn' => $jumlah_data_bpn,
            'jumlah_data_bursa_efek_indonesia' => $jumlah_data_bursa_efek_indonesia,
            'jumlah_data_bc_peb' => $jumlah_data_bc_peb,
            'jumlah_data_bc_pib' => $jumlah_data_bc_pib,
        ]);
    }

    public function saldo_piutang_bruto()
    {
                    $detail_jumlah_saldo_piutang = DB::select('SELECT
                                    unit_kerja,
                                    nik_nitku,
                                akta_pendirian,
                                akta_perubahan,
                                nama,
                                nomor_ketetapan,
                                tanggal_ketetapan,
                                jenis_penangguh_daluwarsa_penagihan,
                                nomor_produk_hukum_daluwarsa_penagihan,
                                tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                                umur_piutang,
                                kualitas_piutang,
                                jenis_piutang,
                                nilai_ketetapan,
                                nilai_bayar,
                                saldo_piutang,
                                nip,
                                juru_sita,
                                tindakan_terakhir
                                FROM
                                    `skp` limit 500'); 
        return view('detail.saldo-piutang-bruto',[            
            'detail_jumlah_saldo_piutang' => $detail_jumlah_saldo_piutang,
        ]);
    }

    public function penyisihan_piutang()
    {
        $penyisihan_piutang_pajak_pusat = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang = "PAJAK PUSAT" LIMIT 500'); 

        $penyisihan_piutang_pajak_daerah = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang = "PAJAK DAERAH" LIMIT 500'); 

        $penyisihan_piutang_non_pajak = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang not in ("PAJAK DAERAH", "PAJAK PUSAT") LIMIT 500'); 

        return view('detail.penyisihan-piutang', [
            'penyisihan_piutang_pajak_pusat' => $penyisihan_piutang_pajak_pusat,
            'penyisihan_piutang_pajak_daerah' => $penyisihan_piutang_pajak_daerah,
            'penyisihan_piutang_non_pajak' => $penyisihan_piutang_non_pajak,
        ]);
    }

    public function net_realizable_value()
    {

        $penyisihan_piutang_pajak_pusat = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang = "PAJAK PUSAT" LIMIT 500'); 

        $penyisihan_piutang_pajak_daerah = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang = "PAJAK DAERAH" LIMIT 500'); 

        $penyisihan_piutang_non_pajak = DB::select('
                            SELECT
                                unit_kerja,
                                nik_nitku,
                            akta_pendirian,
                            akta_perubahan,
                            nama,
                            nomor_ketetapan,
                            tanggal_ketetapan,
                            jenis_penangguh_daluwarsa_penagihan,
                            nomor_produk_hukum_daluwarsa_penagihan,
                            tanggal_produk_hukum_penangguh_daluwarsa_penagihan,
                            umur_piutang,
                            kualitas_piutang,
                            jenis_piutang,
                            nilai_ketetapan,
                            nilai_bayar,
                            saldo_piutang,
                            penyisihan_piutang,
                            nip,
                            juru_sita,
                            tindakan_terakhir
                            FROM
                                `skp` where jenis_piutang not in ("PAJAK DAERAH", "PAJAK PUSAT") LIMIT 500'); 

        return view('detail.net-realizable-value', [
            'penyisihan_piutang_pajak_pusat' => $penyisihan_piutang_pajak_pusat,
            'penyisihan_piutang_pajak_daerah' => $penyisihan_piutang_pajak_daerah,
            'penyisihan_piutang_non_pajak' => $penyisihan_piutang_non_pajak,
        ]);
    }

    public function tunggakan_paksa()
    {

        $tunggakan_paksa = DB::select('
                            SELECT
                                skp.* 
                            FROM
                                skp
                                LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku ) 
                            WHERE
                                penerimaan.nomor_ketetapan IS NULL and skp.nomor_surat_teguran is not null limit 100'); 

        return view('detail.tunggakan-paksa', [
            'tunggakan_paksa' => $tunggakan_paksa,
        ]);
    }

    public function downloadWordSuratPaksa()
    {
        $filePath = public_path('assets/template/surat_paksa/Surat_Paksa.docx');
        return Response::download($filePath);
    }

    public function generate_no_surat_paksa(Request $request, $nomor)
    {
        
        DB::update(
                'UPDATE skp 
                SET nomor_surat_paksa = concat("SP-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/WPJ.02/KPP.0304/2024"), tanggal_surat_paksa = now() 
                WHERE
                    concat(nik_nitku, REPLACE(nomor_ketetapan, "/", ""), REPLACE(tanggal_ketetapan, "-", "")) = "' . $nomor .'"' 
        );

        return redirect("/tunggakan-paksa")->with('success', 'Nomor berhasil digenerate');;
    }

    public function generate_no_basp(Request $request, $nomor)
    {
        
        DB::update(
                'UPDATE skp 
                SET nomor_ba_pemberitahuan_sp = concat("BASP-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/KPP.030504/2024"), tanggal_ba_pemberitahuan_sp = now() 
                WHERE
                    concat(nik_nitku, REPLACE(nomor_ketetapan, "/", ""), REPLACE(tanggal_ketetapan, "-", "")) = "' . $nomor .'"' 
        );

        return redirect("/tunggakan-paksa")->with('success', 'Nomor berhasil digenerate');;
    }



    public function tunggakan_sita()
    {

        $tunggakan_sita = DB::select('
                            SELECT
                                skp.* 
                            FROM
                                skp
                                LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku )  
                            WHERE
                                 penerimaan.nomor_ketetapan IS NULL 
                            AND skp.nomor_surat_paksa IS NOT NULL limit 100'); 

        return view('detail.tunggakan-sita', [
            'tunggakan_sita' => $tunggakan_sita,
        ]);
    }

    public function generate_no_spmp(Request $request, $nomor)
    {
        
        DB::update(
                'UPDATE skp 
                SET nomor_spmp = concat("PRIN-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/SPMP/KPP.0304/2024"), tanggal_spmp = now() 
                WHERE
                    concat(nik_nitku, REPLACE(nomor_ketetapan, "/", ""), REPLACE(tanggal_ketetapan, "-", "")) = "' . $nomor .'"' 
        );

        return redirect("/tunggakan-sita")->with('success', 'Nomor berhasil digenerate');;
    }

    public function generate_no_baps(Request $request, $nomor)
    {
        
        DB::update(
                'UPDATE skp 
                SET nomor_baps = concat("BAPS-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/KPP.030504/2024"), tanggal_baps = now() 
                WHERE
                    concat(nik_nitku, REPLACE(nomor_ketetapan, "/", ""), REPLACE(tanggal_ketetapan, "-", "")) = "' . $nomor .'"' 
        );

        return redirect("/tunggakan-baps")->with('success', 'Nomor berhasil digenerate');;
    }

    public function downloadWordSPMP()
    {
        $filePath = public_path('assets/template/spmp/SPMP.docx');
        return Response::download($filePath);
    }


    public function tunggakan_blokir()
    {
        $tunggakan_blokir = DB::select('
                            SELECT
                                skp.*, bank.* 
                            FROM
                                skp
                                LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku )
                            join bank on skp.nik_nitku = bank.nik
                            WHERE
                                penerimaan.nomor_ketetapan IS NULL 
                                AND skp.nomor_spmp IS NOT NULL 
                                LIMIT 100'); 


        return view('detail.tunggakan-blokir', [
            'tunggakan_blokir' => $tunggakan_blokir
        ]);
    }

    public function tunggakan_baps()
    {

        $tunggakan_baps = DB::select('
                            SELECT
                                skp.* 
                            FROM
                                skp
                                LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang, skp.nik_nitku ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang, penerimaan.nik_nitku ) 
                            WHERE
                                penerimaan.nomor_ketetapan IS NULL 
                                AND skp.nomor_spmp IS NOT NULL 
                                LIMIT 100'); 


        return view('detail.tunggakan-baps', [
            'tunggakan_baps' => $tunggakan_baps
        ]);
    }

    public function downloadWordBAPS()
    {
        $filePath = public_path('assets/template/baps/BAPS.docx');
        return Response::download($filePath);
    }

    public function tunggakan_lelang()
    {
        return view('detail.tunggakan-lelang');
    }

    public function tunggakan_non_lelang()
    {

        $tunggakan_non_lelang = DB::select('
                            SELECT
                                skp.*,
                                bank.* 
                            FROM
                                skp
                                LEFT JOIN penerimaan ON concat( skp.nomor_ketetapan, skp.saldo_piutang ) = CONCAT( penerimaan.nomor_ketetapan, penerimaan.saldo_piutang ) 
                                AND penerimaan.nik_nitku = skp.nik_nitku
                                LEFT JOIN bank ON skp.nik_nitku = bank.nik 
                            WHERE
                                penerimaan.nomor_ketetapan IS NULL 
                                AND skp.nomor_surat_permintaan_blokir_bank IS NOT NULL 
                                LIMIT 100'); 


        return view('detail.tunggakan-non-lelang', [
            'tunggakan_non_lelang' => $tunggakan_non_lelang
        ]);

    }

    public function generate_no_ba_blokir(Request $request, $nomor)
    {
        
        DB::update(
                'UPDATE skp 
                SET nomor_ba_blokir = concat("BABLOKIR-", LPAD(FLOOR(RAND() * 999999.99), 6, "0"), "/KPP.030504/2024"), tanggal_ba_blokir = now() 
                WHERE
                    concat(nik_nitku, REPLACE(nomor_ketetapan, "/", ""), REPLACE(tanggal_ketetapan, "-", "")) = "' . $nomor .'"' 
        );

        return redirect("/tunggakan-non-lelang")->with('success', 'Nomor berhasil digenerate');;
    }

    public function tunggakan_cegah()
    {
        return view('detail.tunggakan-cegah');
    }

    public function tunggakan_sandera()
    {
        return view('detail.tunggakan-sandera');
    }

    public function indikasi_pss()
    {
        return view('detail.indikasi-pss');
    }

    public function utang_pajak_kurang_2_tahun()
    {
        return view('detail.utang-pajak-kurang-2-tahun');
    }

    public function jumlah_penunggak_utang()
    {
        return view('detail.jumlah-penunggak-utang');
    }

    public function bank_eksternal($nik = null)
    {
                
        if ($nik) {
            // If NIK is provided, fetch the user
            $data_bank = DB::select('select * from bank where nik = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.bank-eksternal', compact('data_bank', 'nik'));
        } else{
            $data_bank = DB::select('select * from bank where nik');
            return view('data_eksternal.bank-eksternal', compact('data_bank', 'nik'));
        }
    }

    public function pengadilan_niaga_eksternal($nik = null)
    {

        if ($nik) {
            // If NIK is provided, fetch the user
            $data_pengadilan_niaga = DB::select('select * from pengadilan_niaga where nik_nitku = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.pengadilan-niaga-eksternal', compact('data_pengadilan_niaga', 'nik'));
        } else{
            $data_pengadilan_niaga = DB::select('select * from pengadilan_niaga where nik_nitku');
            return view('data_eksternal.pengadilan-niaga-eksternal', compact('data_pengadilan_niaga', 'nik'));
        }
    }

    public function imigrasi($nik = null)
    {
        if ($nik) {
            // If NIK is provided, fetch the user
            $data_imigrasi = DB::select('select * from imigrasi where nik = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.imigrasi', compact('data_imigrasi', 'nik'));
        } else{
            $data_imigrasi = DB::select('select * from imigrasi where nik');
            return view('data_eksternal.imigrasi', compact('data_imigrasi', 'nik'));
        }
    }

    public function ahu_eksternal()
    {
        $data_ahu = DB::select('select * from ahu');
        return view('data_eksternal.ahu-eksternal', compact('data_ahu'));
    }

    public function bc()
    {
        $data_bc_peb = DB::select('select * from bc_peb');
        $data_bc_pib = DB::select('select * from bc_pib');
        return view('data_eksternal.bc', compact('data_bc_peb', 'data_bc_pib'));
    }

    public function polri_eksternal($nik = null)
    {
        if ($nik) {
            // If NIK is provided, fetch the user
            $data_polri = DB::select('select * from polri where nik = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.polri-eksternal', compact('data_polri', 'nik'));
        } else{
            $data_polri = DB::select('select * from polri where nik');
            return view('data_eksternal.polri-eksternal', compact('data_polri', 'nik'));
        }
    }

    public function bpn_eksternal($nik = null)
    {

        if ($nik) {
            // If NIK is provided, fetch the user
            $data_bpn = DB::select('select * from bpn where nik = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.bpn-eksternal', compact('data_bpn', 'nik'));
        } else{
            $data_bpn = DB::select('select * from bpn where nik');
            return view('data_eksternal.bpn-eksternal', compact('data_bpn', 'nik'));
        }
    }

    public function bei_eksternal($nik = null)
    {

        if ($nik) {
            // If NIK is provided, fetch the user
            $data_bei = DB::select('select * from bursa_efek_indonesia where nik = "' . $nik . '"');

            // Return a view and pass the user data
            return view('data_eksternal.bei-eksternal', compact('data_bei', 'nik'));
        } else{
            $data_bei = DB::select('select * from bursa_efek_indonesia where nik');
            return view('data_eksternal.bei-eksternal', compact('data_bei', 'nik'));
        }
    }

    public function penerimaan_evaluasi()
    {
        return view('data_eksternal.penerimaan-evaluasi');
    }

    public function tindakan_penagihan()
    {
        return view('data_eksternal.tindakan-penagihan');
    }

    public function manajemen_waktu()
    {
        return view('data_eksternal.manajemen-waktu');
    }

    public function manajemen_barang_sitaan()
    {
        return view('data_eksternal.manajemen-barang-sitaan');
    }

}
