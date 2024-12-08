@extends('layout')
@section('konten')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Istilah Komputer</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('kamus.submit') }}" method="post">
        @csrf
            <label>Istilah</label>
            <input type="text" name="istilah" class="form-control mb-3" required>
            <label>Penjelasan</label>
            <textarea type="text" name="penjelasan" class="form-control mb-3" rows="3" required></textarea>

            <button class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection