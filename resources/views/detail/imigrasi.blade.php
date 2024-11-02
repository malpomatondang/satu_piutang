<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">KEMENKUMHAM - Ditjen Imigrasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            KEMENKUMHAM - Ditjen Imigrasi
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
                            <h3 class="card-title">KEMENKUMHAM - Ditjen Imigrasi</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama KTP</th>
                                        <th class="text-center">Nama Passport</th>
                                        <th class="text-center">Nomor Passport</th>
                                        <th class="text-center">Tanggal Lahir</th>
                                        <th class="text-center">Tujuan Berangkat</th>
                                        <th class="text-center">Tanggal Berangkat</th>
                                        <th class="text-center">Tujuan Kembali</th>
                                        <th class="text-center">Tanggal Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_imigrasi as $imigrasi)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $imigrasi->nik }}</td>
                                        <td>{{ $imigrasi->nama }}</td>
                                        <td>{{ $imigrasi->nama_sesuai_passport }}</td>
                                        <td>{{ $imigrasi->nomor_passport }}</td>
                                        <td>{{ $imigrasi->tanggal_lahir }}</td>
                                        <td>{{ $imigrasi->tujuan_keberangkatan }}</td>
                                        <td>{{ $imigrasi->tanggal_keberangkatan }}</td>
                                        <td>{{ $imigrasi->tujuan_kembali }}</td>
                                        <td>{{ $imigrasi->tanggal_kembali }}</td>
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