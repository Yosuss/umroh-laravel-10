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
                                            <label for="no">nama</label>
                                            <input type="text" id="no" class="form-control" placeholder="nama"
                                                name="no" value="{{ $testimoni_edit->nama}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="desk-column">desk</label>
                                            <input type="text" id="desk-column" class="form-control" placeholder="desk"
                                                desk="fname-column" value="{{ $testimoni_edit->desk}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="testimoni" class="form-label">testimoni</label>
                                            <textarea class="form-control" id="testimoni" placeholder="testimoni" rows="3">{{$testimoni_edit->testimoni}}</textarea>
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
