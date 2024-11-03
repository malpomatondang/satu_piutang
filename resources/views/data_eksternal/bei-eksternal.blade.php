<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Bursa Efek Indonesia</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            BEI
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
                            <h3 class="card-title">Bursa Efek Indonesia</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="align-middle">
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">NIK/NITKU</th>
                                        <th class="text-center">Nama Investor</th>
                                        <th class="text-center">Nama Perusahaan</th>
                                        <th class="text-center">Jenis Investasi</th>
                                        <th class="text-center">Harga Saham</th>
                                        <th class="text-center">Jumlah Saham</th>
                                        <th class="text-center">Nilai Rupiah</th>
                                        <th class="text-center">Dividen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_bei as $bei)
                                    <tr class="align-middle">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bei->nik }}</td>
                                        <td>{{ $bei->nama_investor }}</td>
                                        <td>{{ $bei->nama_perusahaan }}</td>
                                        <td>{{ $bei->jenis_investasi }}</td>
                                        <td>{{ number_format($bei->harga_saham) }}</td>
                                        <td>{{ number_format($bei->jumlah_saham) }}</td>
                                        <td>{{ number_format($bei->nilai_rupiah) }}</td>
                                        <td>{{ number_format($bei->dividen) }}</td>
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