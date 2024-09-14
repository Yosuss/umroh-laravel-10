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
                                            <label for="no">email</label>
                                            <input type="text" id="no" class="form-control" placeholder="email"
                                                name="no" value="{{ $contact_edit->email}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name-column">Name</label>
                                            <input type="text" id="name-column" class="form-control" placeholder="Name"
                                                name="fname-column" value="{{ $contact_edit->name}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="subject" class="form-label">subject</label>
                                            <textarea class="form-control" id="subject" placeholder="subject" rows="3">{{$contact_edit->subject}}</textarea>
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
