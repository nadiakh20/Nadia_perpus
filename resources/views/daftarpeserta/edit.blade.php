@extends('layouts.app2')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('daftarpeserta.update', $edit->id)}}" method="POST">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value=""></option>
                            <option {{($edit->status == 0 ) ? 'selected': ''}} value="0">Tidak Lolos</option>
                            <option {{($edit->status == 1 ) ? 'selected': ''}} value="1">Lolos</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="simpan">
                        <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
    </div>
@endsection
