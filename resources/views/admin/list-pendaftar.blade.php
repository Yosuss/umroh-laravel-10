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
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id_daftar }}">
                                            Edit
                                        </button>
                                    </form>
                                    <!--login form Modal -->
                                    <div class="modal fade" id="editModal{{ $item->id_daftar }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $item->id_daftar }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">
                                                        pendaftar
                                                    </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('list-pendaftar.update', ['id' => $item->id_daftar]) }}">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <label for="name">nama: </label>
                                                        <div class="form-group">
                                                            <input id="name" name='nama' type="text"
                                                                placeholder="name" class="form-control"
                                                                value="{{ $item->nama }}" />
                                                        </div>
                                                        <label for="alamat">alamat: </label>
                                                        <div class="form-group">
                                                            <input id="alamat" name='alamat' type="text"
                                                                placeholder="alamat" class="form-control"
                                                                value="{{ $item->alamat }}" />
                                                        </div>
                                                        <label for="no">no: </label>
                                                        <div class="form-group">
                                                            <input id="no" name='no' type="text"
                                                                placeholder="no" class="form-control"
                                                                value="{{ $item->no }}" />
                                                        </div>
                                                        <label for="date">date: </label>
                                                        <div class="form-group">
                                                            <input id="date" name='date' type="text"
                                                                placeholder="date" class="form-control"
                                                                value="{{ $item->date }}" />
                                                        </div>
                                                        <label for="jumlah">jumlah: </label>
                                                        <div class="form-group">
                                                            <input id="jumlah" name="jumlah" type="text"
                                                                placeholder="jumlah" class="form-control"
                                                                value="{{ $item->jumlah }}" />
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
                                        action="{{ route('list-pendaftar.hapus', ['id' => $item->id_daftar]) }}">
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
