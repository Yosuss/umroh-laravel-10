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
                    <!--login form Modal -->
                    @foreach ($daftar as $item)
                        <div class="modal fade text-left" id="updateModal{{ $daftar->id_daftar }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">
                                            testimoni
                                        </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('list-pendaftar.update', $daftar->id_daftar) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-body">
                                            <label for="name">nama: </label>
                                            <div class="form-group">
                                                <input id="name" type="text" placeholder="name"
                                                    class="form-control" value="{{ $item->nama }}" />
                                            </div>
                                            <label for="alamat">alamat: </label>
                                            <div class="form-group">
                                                <input id="alamat" type="text" placeholder="alamat"
                                                    class="form-control" value="{{ $item->alamat }}" />
                                            </div>
                                            <label for="no">no: </label>
                                            <div class="form-group">
                                                <input id="no" type="text" placeholder="no"
                                                    class="form-control" value="{{ $item->no }}" />
                                            </div>
                                            <label for="date">date: </label>
                                            <div class="form-group">
                                                <input id="date" type="text" placeholder="date"
                                                    class="form-control" value="{{ $item->date }}" />
                                            </div>
                                            <label for="jumlah">jumlah: </label>
                                            <div class="form-group">
                                                <input id="jumlah" type="text" placeholder="jumlah"
                                                    class="form-control" value="{{ $item->jumlah }}" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">updste</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--login form Modal end-->
                </table>
                <div class="d-flex justify-content-end">
                    {{ $daftar->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
