@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('level.update', $edit->id) }}" method="POST">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Level</label>
                        <input value="{{ $edit->nama_level }}" type="text" name="nama_level" placeholder="Masukkan level"
                            class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
