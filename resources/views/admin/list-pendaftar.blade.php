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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->jumlah }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>


@endsection
