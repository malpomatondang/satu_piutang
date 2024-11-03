<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tunggakan BAPS</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tunggakan BAPS
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
                            <h3 class="card-title">Tunggakan BAPS</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Unit Kerja</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Nomor SPMP</th>
                                        <th class="text-center">Tanggal SPMP</th>
                                        <th class="text-center">Nilai Ketetapan</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Generate Nomor BAPS</th>
                                        <th class="text-center">Jenis Aset</th>
                                        <th class="text-center">Lokasi Aset</th>
                                        <th class="text-center">Nilai Aset</th>
                                        <th class="text-center">Tgl Update Nilai Aset</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tunggakan_baps as $baps)                                        
                                        <tr class="align-middle">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $baps->unit_kerja }}</td>
                                            <td>{{ $baps->nik_nitku }}</td>
                                            <td>{{ $baps->nama }}</td>
                                            <td>{{ $baps->nomor_spmp }}</td>
                                            <td>{{ $baps->tanggal_spmp }}</td>
                                            <td class="text-center">{{ number_format($baps->nilai_ketetapan) }}</td>
                                            <td>{{ $baps->nip }}</td>
                                            <td>{{ $baps->juru_sita }}</td>          
                                            <td><a href="download-word-baps"><button type="button" class="btn btn-outline-primary mb-2">Buat BAPS</button></a></td>  
                                            <td>
                                                @if ($baps->nomor_baps)
                                                {{ $baps->nomor_baps }} 
                                                @else
                                                <a href="generate_no_baps/{{ $baps->nik_nitku }}{{ str_replace("/", "", $baps->nomor_ketetapan) }}{{ str_replace("-", "", $baps->tanggal_ketetapan) }}"><button type="button" class="btn btn-outline-primary mb-2">Generate No BAPS</button></a>  
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <select class="form-select" id="validationCustom04" required>
                                                    <option value="">Pilih Jenis Aset..</option>
                                                    <option value="Tidak ada Aset Sitaan">Tidak ada Aset Sitaan</option>
                                                    <option value="Tanah dan/atau Bangunan termasuk Apartemen, Rumah Susun">Tanah dan/atau Bangunan termasuk Apartemen, Rumah Susun</option>
                                                    <option value="Logam Mulia dengan sertifikat">Logam Mulia dengan sertifikat</option>
                                                    <option value="Emas bukan logam mulia (tanpa sertifikat) termasuk perhiasan yang terbuat dari Emas">Emas bukan logam mulia (tanpa sertifikat) termasuk perhiasan yang terbuat dari Emas</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </td>
                                            <td class="text-center">
                                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </td>
                                            <td class="text-center">
                                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </td>
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