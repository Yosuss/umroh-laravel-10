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
                        <th>email</th>
                        <th>subject</th>
                        <th>hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>@include('component.btn-submit')</td>
                            <td>@include('component.btn-danger')</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $contact->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
