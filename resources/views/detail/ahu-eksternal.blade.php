<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">KEMENKUMHAM - Ditjen AHU</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            KEMENKUMHAM - Ditjen AHU
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
                            <h3 class="card-title">KEMENKUMHAM - Ditjen AHU</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">No Akta Pendirian</th>
                                        <th class="text-center">Tanggal Akta Pendirian</th>
                                        <th class="text-center">Status Hukum</th>
                                        <th class="text-center">Nama Pengurus</th>
                                        <th class="text-center">Jabatan Pengurus</th>
                                        <th class="text-center">Jumlah Modal Disetor</th>
                                        <th class="text-center">% Modal Disetor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_ahu as $ahu)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ahu->nik }}</td>
                                        <td>{{ $ahu->nama }}</td>
                                        <td>{{ $ahu->no_akta_pendirian_perubahan }}</td>
                                        <td>{{ $ahu->tanggal_akta_pendirian_perubahan }}</td>
                                        <td>{{ $ahu->status_hukum }}</td>
                                        <td>{{ $ahu->nama_pengurus }}</td>
                                        <td>{{ $ahu->jabatan_pengurus }}</td>
                                        <td>{{ number_format($ahu->jumlah_modal_disetor) }}</td>
                                        <td>{{ $ahu->persentase_modal_disetor*100 }}%</td>
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