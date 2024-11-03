<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">SATU PIUTANG: Otomasi dan Integrasi Penagihan dan Manajemen Piutang Negara</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">REKONSILIASI SALDO PIUTANG</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_saldo_piutang_bruto[0]->saldo_piutang, 2) }} M</h3>
                            <p>SALDO PIUTANG BRUTO</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="saldo-piutang-bruto" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ number_format($penyisihan_piutang[0]->penyisihan_piutang, 2) }} M</h3>
                            <p>PENYISIHAN PIUTANG</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="penyisihan-piutang" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_saldo_piutang_bruto[0]->saldo_piutang - $penyisihan_piutang[0]->penyisihan_piutang,2)  }}</h3>
                            <p>NET REALIZABLE VALUE</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="net-realizable-value" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
            
            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">EARLY WARNING TINDAKAN PENAGIHAN</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_tunggakan_paksa[0]->jumlah_tunggakan_paksa)  }}</h3>
                            <p>TUNGGAKAN PAKSA</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-paksa" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_tunggakan_sita[0]->jumlah_tunggakan_sita)  }}</h3>
                            <p>TUNGGAKAN SPMP</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-sita" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_tunggakan_baps[0]->jumlah_tunggakan_baps)  }}</h3>
                            <p>TUNGGAKAN BAPS</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-baps" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_tunggakan_blokir[0]->jumlah_tunggakan_blokir)  }}</h3>
                            <p>TUNGGAKAN BLOKIR</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-blokir" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>53</h3>
                            <p>TUNGGAKAN LELANG</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-lelang" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_tunggakan_non_lelang[0]->jumlah_tunggakan_non_lelang)  }}</h3>
                            <p>TUNGGAKAN PENJUALAN BARANG SITAAN (NON LELANG)</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-non-lelang" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>53</h3>
                            <p>TUNGGAKAN CEGAH</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-cegah" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>53</h3>
                            <p>TUNGGAKAN SANDERA</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tunggakan-sandera" target="_blank" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 2-->
                </div> <!--end::Col-->
                
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-danger">
                        <div class="card-header">
                            <h3 class="card-title">EARLY ACTION</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>150</h3>
                            <p>INDIKASI PENAGIHAN SEKETIKA SEKALIGUS</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="indikasi-pss" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>150</h3>
                            <p>UTANG PAJAK AKAN DALUWARSA < 2 TAHUN</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="utang-pajak-kurang-2-tahun" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->

            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">JOINT COLLECTION</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>JUMLAH PENUNGGAK UTANG</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="jumlah-penunggak-utang" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->

            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">PEMANFAATAN DATA EKSTERNAL</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_bank[0]->jumlah_data_bank)  }}</h3>
                            <p>BANK</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="bank-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_pengadilan_niaga[0]->jumlah_data_pengadilan_niaga)  }}</h3>
                            <p>PENGADILAN NIAGA</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="pengadilan-niaga-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_imigrasi[0]->jumlah_data_imigrasi)  }}</h3>
                            <p>KEMENKUMHAM - DITJEN IMIGRASI</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="imigrasi" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_ahu[0]->jumlah_data_ahu)  }}</h3>
                            <p>KEMENKUMHAM - DITJEN AHU</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="ahu-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_bc_peb[0]->jumlah_data_bc_peb + $jumlah_data_bc_pib[0]->jumlah_data_bc_pib)  }}</h3>
                            <p>KEMENKEU - DITJEN BEA CUKAI</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="bc" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_polri[0]->jumlah_data_polri)  }}</h3>
                            <p>POLRI</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="polri-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_bpn[0]->jumlah_data_bpn)  }}</h3>
                            <p>BADAN PERTANAHAN NASIONAL</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="bpn-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ number_format($jumlah_data_bursa_efek_indonesia[0]->jumlah_data_bursa_efek_indonesia)  }}</h3>
                            <p>BURSA EFEK INDONESIA</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="bei-eksternal" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col--> 
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
            <div class="row g-4 mb-4">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">EVALUASI KINERJA PENAGIHAN</h3>
                            <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div> <!-- /.card-tools -->
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>PREDICTIVE AND PRESCRIPTIVE ANALYSIS</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="penerimaan-evaluasi" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>PENERIMAAN</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="penerimaan-evaluasi" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>TINDAKAN PENAGIHAN</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="tindakan-penagihan" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>MANAJEMEN WAKTU</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="manajemen-waktu" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>MANAJEMEN BARANG SITAAN DAN AGUNAN</p>
                        </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            
                        </svg> <a href="manajemen-barang-sitaan" target="_blank" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i> </a>
                    </div> <!--end::Small Box Widget 1-->
                </div> <!--end::Col-->
                
            </div> <!--end::Row--> <!--begin::Row-->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->

        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</x-main-layout>