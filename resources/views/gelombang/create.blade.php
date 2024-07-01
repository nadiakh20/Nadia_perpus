@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('gelombang.store') }}" method="POST">
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Nama Gelombang</label>
                        <input type="text" name="nama_gelombang" placeholder="Masukkan Gelombang" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
            </form>
        </div>
    </div>
@endsection
