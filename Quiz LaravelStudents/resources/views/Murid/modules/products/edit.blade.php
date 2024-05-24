@extends('Murid.layout.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-header fw-bold ">
            <h4>Edit Data</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/update/{{ $student->id }}/edit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama</label>
                    <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror"
                        id="fullname" autocomplete="off" value="{{ old('fullname', $student->fullname) }}">
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" class="form-control @error('npm') is-invalid @enderror"
                        id="npm" autocomplete="off" value="{{ old('npm', $student->npm) }}">
                    @error('npm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" autocomplete="off" value="{{ old('email', $student->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" name="prodi" class="form-control @error('prodi') is-invalid @enderror"
                        id="prodi" autocomplete="off" value="{{ old('prodi', $student->prodi) }}">
                    @error('prodi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
