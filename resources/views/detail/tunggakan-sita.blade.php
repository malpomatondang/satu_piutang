<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tunggakan Sita</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tunggakan Sita
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
                            <h3 class="card-title">Tunggakan Sita</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Unit Kerja</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Nomor Ketetapan</th>
                                        <th class="text-center">Tanggal Ketetapan</th>
                                        <th class="text-center">Nilai Ketetapan</th>
                                        <th class="text-center">Nomor Surat Paksa</th>
                                        <th class="text-center">Tanggal Surat Paksa</th>
                                        <th class="text-center">Nomor Berita Acara Pemberitahuan Surat Paksa</th>
                                        <th class="text-center">Tanggal BA Pemberitahuan Surat Paksa</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Generate Nomor SPMP</th>
                                        <th class="text-center">Sumber Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tunggakan_sita as $sita)                                        
                                        <tr class="align-middle">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sita->unit_kerja }}</td>
                                            <td>{{ $sita->nik_nitku }}</td>
                                            <td>{{ $sita->nama }}</td>
                                            <td>{{ $sita->nomor_ketetapan }}</td>
                                            <td>{{ $sita->tanggal_ketetapan }}</td>
                                            <td class="text-center">{{ number_format($sita->nilai_ketetapan) }}</td>
                                            <td>{{ $sita->nomor_surat_paksa }}</td>
                                            <td>{{ $sita->tanggal_surat_paksa }}</td>
                                            <td>{{ $sita->nomor_ba_pemberitahuan_sp }}</td>
                                            <td>{{ $sita->tanggal_ba_pemberitahuan_sp }}</td>
                                            <td>{{ $sita->nip }}</td>
                                            <td>{{ $sita->juru_sita }}</td>          
                                            <td><a href="download-word-spmp"><button type="button" class="btn btn-outline-primary mb-2">Buat SPMP</button></a></td>  
                                            <td>
                                                @if ($sita->nomor_spmp)
                                                {{ $sita->nomor_spmp }} 
                                                @else
                                                <a href="generate_no_spmp/{{ $sita->nik_nitku }}{{ str_replace("/", "", $sita->nomor_ketetapan) }}{{ str_replace("-", "", $sita->tanggal_ketetapan) }}"><button type="button" class="btn btn-outline-primary mb-2">Generate No SPMP</button></a>  
                                                @endif
                                            </td>
                                            <td>
                                                <ul>
                                                    <li><a href="polri-eksternal/{{ $sita->nik_nitku }}">Polri</a></li>
                                                    <li><a href="bpn-eksternal/{{ $sita->nik_nitku }}">BPN</a></li>
                                                    <li><a href="imigrasi/{{ $sita->nik_nitku }}">Imigrasi</a></li>
                                                    <li><a href="bei-eksternal/{{ $sita->nik_nitku }}">BEI</a></li>
                                                    <li><a href="bank-eksternal/{{ $sita->nik_nitku }}">Bank</a></li>
                                                    <li><a href="pengadilan-niaga-eksternal/{{ $sita->nik_nitku }}">Pengadilan Niaga</a></li>
                                                </ul>    
                                            </td>  
                                            {{-- <td>
                                                @if ($sita->nomor_baps)
                                                {{ $sita->nomor_baps }} 
                                                @else
                                                <a href="generate_no_baps/{{ $sita->nik_nitku }}{{ str_replace("/", "", $sita->nomor_ketetapan) }}{{ str_replace("-", "", $sita->tanggal_ketetapan) }}"><button type="button" class="btn btn-outline-primary mb-2">Generate No BAPS</button></a>  
                                                @endif
                                            </td>                                 --}}
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