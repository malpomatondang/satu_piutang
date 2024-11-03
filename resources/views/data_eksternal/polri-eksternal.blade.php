<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    
                        <h3 class="mb-0">Data Kepemilikan Motor</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Data Kepemilikan Motor
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
                            <h3 class="card-title">Data Kepemilikan Motor</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama Pemilik</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tanggal Lahir</th>
                                        <th class="text-center">Nomor Polisi</th>
                                        <th class="text-center">Nomor Rangka</th>
                                        <th class="text-center">Tahun Pembuatan</th>
                                        <th class="text-center">Nama Jenis Kendaraan</th>
                                        <th class="text-center">Merk Kendaraan</th>
                                        <th class="text-center">Type Kendaraan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_polri as $polri)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $polri->nik }}</td>
                                        <td>{{ $polri->nama_pemilik }}</td>
                                        <td>{{ $polri->alamat }}</td>
                                        <td>{{ $polri->tanggal_lahir }}</td>
                                        <td>{{ $polri->nopol }}</td>
                                        <td>{{ $polri->no_rangka }}</td>
                                        <td>{{ $polri->tahun_pembuatan }}</td>
                                        <td>{{ $polri->nama_jenis }}</td>
                                        <td>{{ $polri->merk_kendaraan }}</td>
                                        <td>{{ $polri->type_kendaraan }}</td>
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