@extends('menu')
@section('menu')
    <div class="text-center mt-3">
        <h2>Registrasi Admin</h2>
        <p>Silahkan isi formulir berikut untuk registrasi</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: left;">
                        <form action="{{ route('registrasi.submit') }}" method="post">
                            @csrf
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control mb-2" required>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control mb-2" required>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2"required>
                            <div class="d-flex">
                                <button class="btn btn-primary mt-2">Registrasi</button>
                                <div class="ms-auto mt-3 ml-2">
                                    <a href="{{ route('login') }}">Sudah punya akun? Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
