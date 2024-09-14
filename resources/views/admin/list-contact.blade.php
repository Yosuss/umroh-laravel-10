@extends('template.layout_admin')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>email</th>
                            <th>Nama</th>
                            <th>subject</th>
                            <th>edit</th>
                            <th>\hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>
                                        <form action="{{ route('list-contact.edit', ['id' => $item->id_contact]) }}">
                                            @include('component.btn-submit')
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('list-contact.hapus', ['id' => $item->id_contact]) }}">
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
                    {{ $contact ->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
