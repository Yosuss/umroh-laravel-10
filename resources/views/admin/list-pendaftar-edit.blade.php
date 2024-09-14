@extends('template.layout_admin')
@section('konten')
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="" class="form" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name-column">Name</label>
                                            <input type="text" id="name-column" class="form-control" placeholder="Name"
                                                name="fname-column" value="{{ $daftar_edit->nama}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no">no telephone</label>
                                            <input type="text" id="no" class="form-control" placeholder="no telepjone"
                                                name="no" value="{{ $daftar_edit->no}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date">date</label>
                                            <input type="date" id="date" class="form-control"
                                                name="date" placeholder="date" value="{{ $daftar_edit->date}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jumlah">jumlah</label>
                                            <input type="text" id="jumlah" class="form-control"
                                                name="jumlah" placeholder="jumlah" value="{{ $daftar_edit->jumlah}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat" class="form-label">alamat</label>
                                            <textarea class="form-control" id="alamat" placeholder="alamat" rows="3">{{$daftar_edit->alamat}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        @include('component.btn-update')
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
    
@endsection
