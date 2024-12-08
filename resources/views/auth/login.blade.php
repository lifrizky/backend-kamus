@extends('menu')
@section('menu')
    <div class="text-center mt-3">
        <h2>Login Admin</h2>
        <p>Silahkan masuk dengan akun anda</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: left;">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label>Email</label>
                            <input type="email" name="email" class="form-control mb-2" required>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2"required>
                            <div class="d-flex">
                                <button class="btn btn-primary mt-2">Login</button>
                                <div class="ms-auto mt-3 ml-2">
                                    <a href="{{ route('registrasi.tampil') }}">Belum punya akun? Registrasi</a>
                                </div>
                            </div>
                        </form>
                        @if (session('Gagal'))
                            <p class="text-danger">{{ session('Gagal') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection