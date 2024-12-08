@extends('layout')
@section('konten')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Database Istilah Komputer</h6>
            <div class="ms-auto">
                <a href="{{ route('kamus.tambah') }}" ><button class="btn btn-primary">Tambah</button></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Istilah</th>
                        <th>Penjelasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Istilah</th>
                        <th>Penjelasan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                @foreach ($kamus as $no=>$data)
                <tbody>
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $data->istilah }}</td>
                        <td>{{ $data->penjelasan }}</td>
                        <td style="display: flex;">
                            <a href="{{ route('kamus.edit', $data->id) }}"><button class="btn btn-warning" style="margin-right: 5px;">Edit</button></a>
                            <form action="{{ route('kamus.delete', $data->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection