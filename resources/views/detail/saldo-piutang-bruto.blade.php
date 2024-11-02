<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Saldo Piutang Bruto</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Saldo Piutang Bruto
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
                            <h3 class="card-title">Saldo Piutang Bruto</h3>
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
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                        <th class="text-center">Tindakan Terakhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail_jumlah_saldo_piutang as $jumlah_saldo_piutang)
                                        
                                    
                                    <tr class="align-middle">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $jumlah_saldo_piutang->unit_kerja }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nik_nitku }}</td>
                                        <td>{{ $jumlah_saldo_piutang->akta_pendirian }}</td>
                                        <td>{{ $jumlah_saldo_piutang->akta_perubahan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nama }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nomor_ketetapan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->tanggal_ketetapan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->jenis_penangguh_daluwarsa_penagihan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nomor_produk_hukum_daluwarsa_penagihan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->tanggal_produk_hukum_penangguh_daluwarsa_penagihan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->umur_piutang }}</td>
                                        <td>{{ $jumlah_saldo_piutang->kualitas_piutang }}</td>
                                        <td>{{ $jumlah_saldo_piutang->jenis_piutang }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nilai_ketetapan }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nilai_bayar }}</td>
                                        <td>{{ $jumlah_saldo_piutang->saldo_piutang }}</td>
                                        <td>{{ $jumlah_saldo_piutang->nip }}</td>
                                        <td>{{ $jumlah_saldo_piutang->juru_sita }}</td>
                                        <td>{{ $jumlah_saldo_piutang->tindakan_terakhir }}</td>
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