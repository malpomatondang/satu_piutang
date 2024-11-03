<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Badan Pertanahan Nasional</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            BPN
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
                            <h3 class="card-title">Badan Pertanahan Nasional</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama KTP</th>
                                        <th class="text-center">Tanggal lahir</th>
                                        <th class="text-center">Nomor Kepemilikan</th>
                                        <th class="text-center">Luas</th>
                                        <th class="text-center">Alamat Kepemilikan</th>
                                        <th class="text-center">Desa/Kelurahan</th>
                                        <th class="text-center">Kecamatan</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_bpn as $bpn)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bpn->nik }}</td>
                                        <td>{{ $bpn->nama }}</td>
                                        <td>{{ $bpn->tanggal_lahir }}</td>
                                        <td>{{ $bpn->nomor_kepemilikan }}</td>
                                        <td>{{ $bpn->luas_tanah }}</td>
                                        <td>{{ $bpn->alamat }}</td>
                                        <td>{{ $bpn->desa_kelurahan }}</td>
                                        <td>{{ $bpn->kecamatan }}</td>
                                        <td>{{ $bpn->kota }}</td>
                                        <td>{{ $bpn->provinsi }}</td>
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