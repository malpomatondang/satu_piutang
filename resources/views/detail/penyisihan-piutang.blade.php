<x-main-layout>
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Penyisihan Piutang</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Penyisihan Piutang
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Penyisihan Piutang Pajak</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="align-middle">
                                                <th style="width: 10px">#</th>
                                                <th class="text-center">Unit Kerja</th>
                                                <th class="text-center">NIK/NITKU</th>
                                                <th class="text-center">Akta Pendirian</th>
                                                <th class="text-center">Akta Perubahan</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Nomor Ketetapan</th>
                                                <th class="text-center">Tanggal Ketetapan</th>
                                                <th class="text-center">Jenis Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Nomor Produk Hukum Daluwarsa Penagihan</th>
                                                <th class="text-center">Tanggal Produk Hukum Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Umur Piutang</th>
                                                <th class="text-center">Kualitas Piutang</th>
                                                <th class="text-center">Jenis Piutang</th>
                                                <th class="text-center">Nilai Ketetapan</th>
                                                <th class="text-center">Nilai Bayar</th>
                                                <th class="text-center">Saldo Piutang</th>
                                                <th class="text-center">Penyisihan Piutang</th>
                                                <th class="text-center">Penyisihan Data Aset</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Juru Sita</th>
                                                <th class="text-center">Tindakan Terakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyisihan_piutang_pajak_pusat as $piutang_pajak_pusat)
                                                
                                            
                                            <tr class="align-middle">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $piutang_pajak_pusat->unit_kerja }}</td>
                                                <td>{{ $piutang_pajak_pusat->nik_nitku }}</td>
                                                <td>{{ $piutang_pajak_pusat->akta_pendirian }}</td>
                                                <td>{{ $piutang_pajak_pusat->akta_perubahan }}</td>
                                                <td>{{ $piutang_pajak_pusat->nama }}</td>
                                                <td>{{ $piutang_pajak_pusat->nomor_ketetapan }}</td>
                                                <td>{{ $piutang_pajak_pusat->tanggal_ketetapan }}</td>
                                                <td>{{ $piutang_pajak_pusat->jenis_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_pusat->nomor_produk_hukum_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_pusat->tanggal_produk_hukum_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_pusat->umur_piutang }}</td>
                                                <td>{{ $piutang_pajak_pusat->kualitas_piutang }}</td>
                                                <td>{{ $piutang_pajak_pusat->jenis_piutang }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->nilai_ketetapan) }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->nilai_bayar) }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->saldo_piutang) }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->penyisihan_piutang) }}</td>
                                                <td>{{ number_format(mt_rand(100, 100000)) }}</td>
                                                <td>{{ $piutang_pajak_pusat->nip }}</td>
                                                <td>{{ $piutang_pajak_pusat->juru_sita }}</td>
                                                <td>{{ $piutang_pajak_pusat->tindakan_terakhir }}</td>
                                            </tr>
        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Penyisihan Piutang Non Pajak</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="align-middle">
                                                <th style="width: 10px">#</th>
                                                <th class="text-center">Unit Kerja</th>
                                                <th class="text-center">NIK/NITKU</th>
                                                <th class="text-center">Akta Pendirian</th>
                                                <th class="text-center">Akta Perubahan</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Nomor Ketetapan</th>
                                                <th class="text-center">Tanggal Ketetapan</th>
                                                <th class="text-center">Jenis Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Nomor Produk Hukum Daluwarsa Penagihan</th>
                                                <th class="text-center">Tanggal Produk Hukum Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Umur Piutang</th>
                                                <th class="text-center">Kualitas Piutang</th>
                                                <th class="text-center">Jenis Piutang</th>
                                                <th class="text-center">Nilai Ketetapan</th>
                                                <th class="text-center">Nilai Bayar</th>
                                                <th class="text-center">Saldo Piutang</th>
                                                <th class="text-center">Penyisihan Piutang</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Juru Sita</th>
                                                <th class="text-center">Tindakan Terakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyisihan_piutang_non_pajak as $piutang_non_pajak)
                                                
                                            
                                            <tr class="align-middle">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $piutang_non_pajak->unit_kerja }}</td>
                                                <td>{{ $piutang_non_pajak->nik_nitku }}</td>
                                                <td>{{ $piutang_non_pajak->akta_pendirian }}</td>
                                                <td>{{ $piutang_non_pajak->akta_perubahan }}</td>
                                                <td>{{ $piutang_non_pajak->nama }}</td>
                                                <td>{{ $piutang_non_pajak->nomor_ketetapan }}</td>
                                                <td>{{ $piutang_non_pajak->tanggal_ketetapan }}</td>
                                                <td>{{ $piutang_non_pajak->jenis_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_non_pajak->nomor_produk_hukum_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_non_pajak->tanggal_produk_hukum_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_non_pajak->umur_piutang }}</td>
                                                <td>{{ $piutang_non_pajak->kualitas_piutang }}</td>
                                                <td>{{ $piutang_non_pajak->jenis_piutang }}</td>
                                                <td>{{ number_format($piutang_non_pajak->nilai_ketetapan) }}</td>
                                                <td>{{ number_format($piutang_non_pajak->nilai_bayar) }}</td>
                                                <td>{{ number_format($piutang_non_pajak->saldo_piutang) }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->penyisihan_piutang) }}</td>
                                                <td>{{ $piutang_non_pajak->nip }}</td>
                                                <td>{{ $piutang_non_pajak->juru_sita }}</td>
                                                <td>{{ $piutang_non_pajak->tindakan_terakhir }}</td>
                                            </tr>
        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Penyisihan Piutang Pemda</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="align-middle">
                                                <th style="width: 10px">#</th>
                                                <th class="text-center">Unit Kerja</th>
                                                <th class="text-center">NIK/NITKU</th>
                                                <th class="text-center">Akta Pendirian</th>
                                                <th class="text-center">Akta Perubahan</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Nomor Ketetapan</th>
                                                <th class="text-center">Tanggal Ketetapan</th>
                                                <th class="text-center">Jenis Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Nomor Produk Hukum Daluwarsa Penagihan</th>
                                                <th class="text-center">Tanggal Produk Hukum Penangguh Daluwarsa Penagihan</th>
                                                <th class="text-center">Umur Piutang</th>
                                                <th class="text-center">Kualitas Piutang</th>
                                                <th class="text-center">Jenis Piutang</th>
                                                <th class="text-center">Nilai Ketetapan</th>
                                                <th class="text-center">Nilai Bayar</th>
                                                <th class="text-center">Saldo Piutang</th>
                                                <th class="text-center">Penyisihan Piutang</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Juru Sita</th>
                                                <th class="text-center">Tindakan Terakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyisihan_piutang_pajak_daerah as $piutang_pajak_daerah)
                                                
                                            
                                            <tr class="align-middle">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $piutang_pajak_daerah->unit_kerja }}</td>
                                                <td>{{ $piutang_pajak_daerah->nik_nitku }}</td>
                                                <td>{{ $piutang_pajak_daerah->akta_pendirian }}</td>
                                                <td>{{ $piutang_pajak_daerah->akta_perubahan }}</td>
                                                <td>{{ $piutang_pajak_daerah->nama }}</td>
                                                <td>{{ $piutang_pajak_daerah->nomor_ketetapan }}</td>
                                                <td>{{ $piutang_pajak_daerah->tanggal_ketetapan }}</td>
                                                <td>{{ $piutang_pajak_daerah->jenis_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_daerah->nomor_produk_hukum_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_daerah->tanggal_produk_hukum_penangguh_daluwarsa_penagihan }}</td>
                                                <td>{{ $piutang_pajak_daerah->umur_piutang }}</td>
                                                <td>{{ $piutang_pajak_daerah->kualitas_piutang }}</td>
                                                <td>{{ $piutang_pajak_daerah->jenis_piutang }}</td>
                                                <td>{{ number_format($piutang_pajak_daerah->nilai_ketetapan) }}</td>
                                                <td>{{ number_format($piutang_pajak_daerah->nilai_bayar) }}</td>
                                                <td>{{ number_format($piutang_pajak_daerah->saldo_piutang) }}</td>
                                                <td>{{ number_format($piutang_pajak_pusat->penyisihan_piutang) }}</td>
                                                <td>{{ $piutang_pajak_daerah->nip }}</td>
                                                <td>{{ $piutang_pajak_daerah->juru_sita }}</td>
                                                <td>{{ $piutang_pajak_daerah->tindakan_terakhir }}</td>
                                            </tr>
        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
</x-main-layout>