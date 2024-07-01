@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('gelombang.create') }}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Tambah Gelombang</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gelombang</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_gelombang }}</td>
                                <td> @if ( $data->aktif == 1)
                                        <p>Aktif</p>
                                    @else <p>Tidak Aktif</p>
                                @endif </td>
                                <td>
                                    <a href="{{ route('gelombang.edit', $data->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('gelombang.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
