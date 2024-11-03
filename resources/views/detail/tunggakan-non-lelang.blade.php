<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tunggakan Non Lelang</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tunggakan Non Lelang
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
                            <h3 class="card-title">Tunggakan Non Lelang</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Unit Kerja</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        {{-- <th class="text-center">Nomor Surat Permintaan Blokir</th>
                                        <th class="text-center">Tanggal Surat Permintaan Blokir</th> --}}
                                        <th class="text-center">Nomor BA Blokir Bank</th>
                                        <th class="text-center">Tanggal BA Blokir Bank</th>
                                        <th class="text-center">Jangka Waktu Blokir Bank</th>
                                        <th class="text-center">Nomor BAPS</th>
                                        <th class="text-center">Tanggal BAPS</th>
                                        <th class="text-center">Status Aset</th>
                                        <th class="text-center">Nilai Ketetapan</th>
                                        <th class="text-center">Jenis Aset</th>
                                        <th class="text-center">Sumber Data</th>
                                        <th class="text-center">Lokasi Aset</th>
                                        <th class="text-center">ID Aset</th>
                                        <th class="text-center">Nilai Aset</th>
                                        <th class="text-center">No. Surat PBK</th>
                                        <th class="text-center">Tanggal Surat PBK</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tunggakan_non_lelang as $non_lelang)                                        
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $non_lelang->unit_kerja }}</td>
                                        <td>{{ $non_lelang->nik_nitku }}</td>
                                        <td>{{ $non_lelang->nama }}</td>
                                        {{-- <td>nomor auto</td>
                                        <td>tanggal auto</td> --}}
                                        <td>{{ $non_lelang->nomor_ba_blokir }}</td>
                                        <td>{{ $non_lelang->tanggal_ba_blokir }}</td>
                                        <td>Jangka waktu blokir</td>
                                        <td>{{ $non_lelang->nomor_baps }}</td>
                                        <td>{{ $non_lelang->tanggal_baps }}</td>
                                        <td>status aset</td>
                                        <td class="text-center">{{ number_format($non_lelang->nilai_ketetapan) }}</td>
                                        <td>Keuangan</td>
                                        <td>{{ $non_lelang->nama_bank_terdaftar }}</td>
                                        <td>{{ $non_lelang->kantor_cabang_bank }}</td>
                                        <td>{{ $non_lelang->nomor_rekening }}</td>
                                        <td class="text-center">{{ number_format($non_lelang->jumlah_uang) }}</td>
                                        <td>nomor pbk</td>
                                        <td>tanggal pbk</td>
                                        <td>{{ $non_lelang->nip }}</td>
                                        <td>{{ $non_lelang->juru_sita }}</td>
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