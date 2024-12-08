@extends('layout')
@section('konten')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Istilah Komputer</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('kamus.update', $kamus->id) }}" method="post">
        @csrf
            <label>Istilah</label>
            <input type="text" name="istilah" value="{{ $kamus->istilah }}" class="form-control mb-3" placeholder="Masukkan Istilah" required>
            <label>Penjelasan</label>
            <textarea type="text" name="penjelasan" class="form-control mb-3" rows="3" placeholder="Penjelasan Istilah" required>{{ $kamus->penjelasan }}</textarea>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection