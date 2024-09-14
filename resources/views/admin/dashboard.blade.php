@extends('template.layout_admin')

@section('konten')
<section class="row">

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="stats-icon purple mb-2 d-flex align-items-center">
                        <span>
                            <i class="bi bi-chat-dots"></i>
                        </span>
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Total Testimoni</h5>
                        <h6 class="text-muted mb-0">{{ $totalTestimoni }} Testimoni</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="stats-icon green mb-2 d-flex align-items-center">
                        <span>
                            <i class="bi bi-person-add"></i>
                        </span>
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Total Pendaftar</h5>
                        <h6 class="text-muted mb-0">{{ $totalPendaftar }} Pendaftar</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="stats-icon red mb-2 d-flex align-items-center">
                        <span>
                            <i class="bi bi-telephone"></i>
                        </span>
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Total Contact</h5>
                        <h6 class="text-muted mb-0">{{ $totalContact }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="./assets/compiled/jpg/2.jpg" />
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Admin</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>testimoni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimoni as $item)
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="./assets/compiled/jpg/5.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">{{ $item->nama }}</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">{{ $item->testimoni }}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $testimoni->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
