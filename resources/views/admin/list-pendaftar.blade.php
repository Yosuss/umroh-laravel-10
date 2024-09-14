@extends('template.layout_admin')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No</th>
                            <th>Data</th>
                            <th>Jumlah</th>
                            <th>edit</th>
                            <th>hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>
                                        <form action="{{ route('list-pendaftar.edit', ['id' => $item->id_daftar]) }}">
                                            @include('component.btn-submit')
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('list-pendaftar.hapus', ['id' => $item->id_daftar]) }}">
                                            @method('DELETE')
                                            @csrf
                                            @include('component.btn-danger')                                
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {{ $daftar->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
