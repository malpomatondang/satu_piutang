<x-main-layout>
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Tunggakan Paksa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tunggakan Paksa
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
                            <h3 class="card-title">Tunggakan Paksa</h3>

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
<!-- Button to trigger the modal -->



                            
                            
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
                                        <th class="text-center">Nomor Surat Teguran</th>
                                        <th class="text-center">Tanggal Pengiriman Surat Teguran</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Juru Sita</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Generate Nomor Surat Paksa</th>
                                        <th class="text-center">Generate Nomor BASP</th>
                                        {{-- <th class="text-center">Upload BASP</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tunggakan_paksa as $paksa)                                        
                                        <tr class="align-middle">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $paksa->unit_kerja }}</td>
                                            <td>{{ $paksa->nik_nitku }}</td>
                                            <td>{{ $paksa->nama }}</td>
                                            <td>{{ $paksa->nomor_ketetapan }}</td>
                                            <td>{{ $paksa->tanggal_ketetapan }}</td>
                                            <td>{{ $paksa->nilai_ketetapan }}</td>
                                            <td>{{ $paksa->nomor_surat_teguran }}</td>
                                            <td>{{ $paksa->tanggal_surat_teguran }}</td>
                                            <td>{{ $paksa->nip }}</td>
                                            <td>{{ $paksa->juru_sita }}</td>
                                            <td><a href="download-word-surat-paksa"><button type="button" class="btn btn-outline-primary mb-2">Buat Surat Paksa dan BASP</button></a></td>
                                            <td>
                                                @if ($paksa->nomor_surat_paksa)
                                                {{ $paksa->nomor_surat_paksa }} 
                                                @else
                                                <a href="generate_no_sp/{{ $paksa->nik_nitku }}{{ str_replace("/", "", $paksa->nomor_ketetapan) }}{{ str_replace("-", "", $paksa->tanggal_ketetapan) }}"><button type="button" class="btn btn-outline-primary mb-2">Generate No SP</button></a>  
                                                @endif
                                            </td>
                                            <td>
                                                @if ($paksa->nomor_ba_pemberitahuan_sp)
                                                {{ $paksa->nomor_ba_pemberitahuan_sp }} 
                                                @else
                                                <a href="generate_no_basp/{{ $paksa->nik_nitku }}{{ str_replace("/", "", $paksa->nomor_ketetapan) }}{{ str_replace("-", "", $paksa->tanggal_ketetapan) }}"><button type="button" class="btn btn-outline-primary mb-2">Generate No BASP</button></a>  
                                                @endif
                                            </td>
                                            {{-- <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Open Modal
                                                </button>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Modal Structure -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="itemName" class="form-label">Item Name</label>
                                                    <input type="text" class="form-control" id="itemName" name="name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="itemDescription" class="form-label">Description</label>
                                                    <textarea class="form-control" id="itemDescription" name="description"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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