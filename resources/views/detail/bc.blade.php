<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">KEMENKEU - Ditjen Bea Cukai</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            KEMENKEU - Ditjen Bea Cukai
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Impor</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body  table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">SEQ PIB</th>
                                        <th class="text-center">NIK/NITKU Importir</th>
                                        <th class="text-center">Nama Importir</th>
                                        <th class="text-center">Negara Pemasok</th>
                                        <th class="text-center">Nama Pemasok</th>
                                        <th class="text-center">No PIB</th>
                                        <th class="text-center">Tanggal PIB</th>
                                        <th class="text-center">Jenis PIB</th>
                                        <th class="text-center">Jumlah Barang</th>
                                        <th class="text-center">Tanggal Tiba</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_bc_pib as $bc_pib)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bc_pib->seq_pib }}</td>
                                        <td>{{ $bc_pib->nik }}</td>
                                        <td>{{ $bc_pib->nama_importir }}</td>
                                        <td>{{ $bc_pib->neg_pemasok }}</td>
                                        <td>{{ $bc_pib->nama_pemasok }}</td>
                                        <td>{{ $bc_pib->no_pib }}</td>
                                        <td>{{ $bc_pib->tgl_pib }}</td>
                                        <td>{{ $bc_pib->jenis_pib }}</td>
                                        <td>{{ $bc_pib->jml_barang }}</td>
                                        <td>{{ $bc_pib->tanggal_tiba }}</td>
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
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Ekspor</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">SEQ PEB</th>
                                        <th class="text-center">NIK/NITKU Pemilik Barang</th>
                                        <th class="text-center">Nama Pemilik Barang</th>
                                        <th class="text-center">Alamat Pemilik Barang</th>
                                        <th class="text-center">NIK/NITKU Eksportir</th>
                                        <th class="text-center">Nama Eksportir</th>
                                        <th class="text-center">Alamat Eksportir</th>
                                        <th class="text-center">Jenis PEB</th>
                                        <th class="text-center">Negara Penerima</th>
                                        <th class="text-center">Nama Penerima</th>
                                        <th class="text-center">Tanggal Ekspor</th>
                                        <th class="text-center">Tahun Ekspor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_bc_peb as $bc_peb)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bc_peb->seq_peb }}</td>
                                        <td>{{ $bc_peb->nik }}</td>
                                        <td>{{ $bc_peb->nama_pemilik_barang }}</td>
                                        <td>{{ $bc_peb->alamat_pemilik_barang }}</td>
                                        <td>{{ $bc_peb->nik_eksportir }}</td>
                                        <td>{{ $bc_peb->nama_eksportir }}</td>
                                        <td>{{ $bc_peb->alamat_eksportir }}</td>
                                        <td>{{ $bc_peb->negara }}</td>
                                        <td>{{ $bc_peb->nama_penerima }}</td>
                                        <td>{{ $bc_peb->tanggal_ekspor }}</td>
                                        <td>{{ $bc_peb->tahun_ekspor }}</td>
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