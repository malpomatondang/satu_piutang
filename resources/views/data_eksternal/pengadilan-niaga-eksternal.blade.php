<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Pengadilan Niaga</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Pengadilan Niaga
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
                            <h3 class="card-title">Pengadilan Niaga</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Pengurus</th>
                                        <th class="text-center">Status Perkara</th>
                                        <th class="text-center">Nama Kreditur</th>
                                        <th class="text-center">Jumlah Utang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_pengadilan_niaga as $pengadilan_niaga)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengadilan_niaga->nik_nitku }}</td>
                                        <td>{{ $pengadilan_niaga->nama }}</td>
                                        <td>{{ $pengadilan_niaga->nama_pengurus }}</td>
                                        <td>{{ $pengadilan_niaga->status_perkara }}</td>
                                        <td>{{ $pengadilan_niaga->nama_kreditur }}</td>
                                        <td>{{ number_format($pengadilan_niaga->jumlah_utang) }}</td>
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