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
                    <!--login form Modal -->
                    @foreach ($testimoni as $item)
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
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
                                    <form id="updateForm" action="#">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-body">
                                            <label for="nama">nama: </label>
                                            <div class="form-group">
                                                <input id="nama" type="text" placeholder="nama" class="form-control"
                                                    value="{{ $item->nama }}" />
                                            </div>
                                            <label for="desk">desk: </label>
                                            <div class="form-group">
                                                <input id="desk" type="text" placeholder="desk"
                                                    class="form-control" value="{{ $item->desk }}" />
                                            </div>
                                            <label for="testimoni">testimoni: </label>
                                            <div class="form-group">
                                                <input id="testimoni" type="text" placeholder="testimoni" class="form-control"
                                                    value="{{ $item->testimoni }}" />
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
                    {{ $testimoni->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
