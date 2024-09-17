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
                            <th>No Telepon</th>
                            <th>Tanggal</th>
                            <th>Jumlah </th>
                            <th>Paket umroh </th>
                            <th colspan="2">Aksi</th>
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
                                <td>{{ $item->paket_umroh }}</td>
                                <td>
                                    <form action="{{ route('list-pendaftar.edit', ['id' => $item->id_daftar]) }}">
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id_daftar }}">
                                            Edit
                                        </button>
                                    </form>
                                    <!--form Modal -->
                                    <div class="modal fade" id="editModal{{ $item->id_daftar }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $item->id_daftar }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">
                                                        Edit Pendaftar
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
                                                        <label for="name">Nama: </label>
                                                        <div class="form-group">
                                                            <input id="name" name='nama' type="text"
                                                                placeholder="name" class="form-control"
                                                                value="{{ $item->nama }}" />
                                                        </div>
                                                        <label for="alamat">Alamat: </label>
                                                        <div class="form-group">
                                                            <input id="alamat" name='alamat' type="text"
                                                                placeholder="alamat" class="form-control"
                                                                value="{{ $item->alamat }}" />
                                                        </div>
                                                        <label for="no">No: </label>
                                                        <div class="form-group">
                                                            <input id="no" name='no' type="text"
                                                                placeholder="no" class="form-control"
                                                                value="{{ $item->no }}" />
                                                        </div>
                                                        <label for="date">Date: </label>
                                                        <div class="form-group">
                                                            <input id="date" name='date' type="text"
                                                                placeholder="date" class="form-control"
                                                                value="{{ $item->date }}" />
                                                        </div>
                                                        <label for="jumlah">Jumlah: </label>
                                                        <div class="form-group">
                                                            <input id="jumlah" name="jumlah" type="text"
                                                                placeholder="jumlah" class="form-control"
                                                                value="{{ $item->jumlah }}" />
                                                        </div>
                                                        <label for="paket_umroh">Paket Umroh: </label>
                                                        <div class="form-group">
                                                            <select name="paket_umroh" id="paket_umroh"
                                                                class="text-lg rounded-lg py-2 w-full">
                                                                <option value="">-- Pilih Paket --</option>
                                                                <option value="paket_1"
                                                                    @if ($item->paket_umroh == 'paket_1') {
                                                                        {{ 'selected' }}
                                                                    } @endif>
                                                                    Paket 1</option>
                                                                <option value="paket_2"
                                                                    @if ($item->paket_umroh == 'paket_2') {
                                                                        {{ 'selected' }}
                                                                    } @endif>
                                                                    Paket 2</option>
                                                                <option value="paket_3"
                                                                    @if ($item->paket_umroh == 'paket_3') {
                                                                        {{ 'selected' }}
                                                                    } @endif>
                                                                    Paket 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        @include('component.btn-update')
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--form Modal end-->
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
    @include('component.error')
@endsection
