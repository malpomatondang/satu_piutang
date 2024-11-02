<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tunggakan Blokir</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tunggakan Blokir
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
                            <h3 class="card-title">Tunggakan Blokir</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Unit Kerja</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Nomor SPMP</th>
                                        <th class="text-center">Tanggal SPMP</th>
                                        <th class="text-center">Nomor Ketetapan</th>
                                        <th class="text-center">Tanggal Ketetapan</th>
                                        <th class="text-center">Nilai Ketetapan</th>
                                        <th class="text-center">Jenis Aset</th>
                                        <th class="text-center">Sumber Data</th>
                                        <th class="text-center">Alamat Penyedia Sumber Data</th>
                                        <th class="text-center">ID Aset</th>
                                        <th class="text-center">Nilai Aset</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tunggakan_blokir as $blokir)                                        
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blokir->unit_kerja }}</td>
                                        <td>{{ $blokir->nik_nitku }}</td>
                                        <td>{{ $blokir->nama }}</td>
                                        <td>{{ $blokir->nomor_spmp }}</td>
                                        <td>{{ $blokir->tanggal_spmp }}</td>
                                        <td>{{ $blokir->nomor_ketetapan }}</td>
                                        <td>{{ $blokir->tanggal_ketetapan }}</td>
                                        <td class="text-center">{{ number_format($blokir->nilai_ketetapan) }}</td>
                                        <td>Keuangan</td>
                                        <td>{{ $blokir->nama_bank_terdaftar }}</td>
                                        <td>{{ $blokir->kantor_cabang_bank }}</td>
                                        <td>{{ $blokir->nomor_rekening }}</td>
                                        <td class="text-center">{{ number_format($blokir->jumlah_uang) }}</td>
                                        <td>{{ $blokir->nip }}</td>
                                        <td>{{ $blokir->juru_sita }}</td>          
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