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
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id_contact }}">
                                            Edit
                                        </button>
                                    </form>
                                    <!--login form Modal -->
                                    <div class="modal fade" id="editModal{{ $item->id_contact }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $item->id_contact }}"
                                        aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">
                                                            contact
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('list-contact.update', ['id' => $item->id_contact] ) }}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <label for="email">email: </label>
                                                            <div class="form-group">
                                                                <input id="email" name="email" type="text" placeholder="email"
                                                                    class="form-control" value="{{ $item->email }}" />
                                                            </div>
                                                            <label for="nama">nama: </label>
                                                            <div class="form-group">
                                                                <input id="nama" name="name" type="text" placeholder="nama"
                                                                    class="form-control" value="{{ $item->name }}" />
                                                            </div>
                                                            <label for="subject">subject: </label>
                                                            <div class="form-group">
                                                                <input id="subject" name="subject" type="text" placeholder="subject"
                                                                    class="form-control" value="{{ $item->subject }}" />
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ms-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">updste</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <!--login form Modal end-->
                                </td>
                                <td>
                                    <form method="POST"
                                        action="{{ route('list-contact.hapus', ['id' => $item->id_contact]) }}">
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
                    {{ $contact->links() }}
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
