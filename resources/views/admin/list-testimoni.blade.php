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
                            <th>Deskripsi</th>
                            <th>Testimoni</th>
                            <th>edit</th>
                            <th>hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimoni as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->desk }}</td>
                                <td>{{ $item->testimoni }}</td>
                                <td>
                                    <form action="{{ route('list-testimoni.edit', ['id' => $item->id_testimoni]) }}">
                                        @include('component.btn-submit')
                                    </form>
                                </td>
                            <td>
                                    <form method="POST"
                                        action="{{ route('list-testimoni.hapus', ['id' => $item->id_testimoni]) }}">
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
                    {{ $testimoni->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
