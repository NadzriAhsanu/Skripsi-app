@extends('layouts.app')

@section('title', 'Rekam Medis')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Rekam Medis</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Rekam Medis </a></div>
                    <div class="breadcrumb-item">All Rekam Medis</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Rekam Medis</h2>
                <p class="section-lead">
                    You can manage all Rekam Medis, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('data-rekam-medis.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Pasien</th>
                                            <th>Diagnosa</th>
                                            <th>Tekanan Darah</th>
                                            <th>Nafas</th>
                                            <th>Nadi</th>
                                            <th>Suhu</th>
                                            <th>tinggi Badan</th>
                                            <th>Berat Badan</th>
                                        </tr>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>
                                                    {{ $record->patient->patient_name }}
                                                </td>
                                                <td>
                                                    {{ $record->diagnosa }}
                                                </td>
                                                <td>
                                                    {{ $record->tekanan_darah }}
                                                </td>
                                                <td>
                                                    {{ $record->nafas }}
                                                </td>
                                                <td>
                                                    {{ $record->nadi }}
                                                </td>
                                                <td>
                                                    {{ $record->suhu }}
                                                </td>
                                                <td>
                                                    {{ $record->tinggi_badan }}
                                                </td>
                                                <td>
                                                    {{ $record->berat_badan }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('data-rekam-medis.edit', $record->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('data-rekam-medis.destroy', $record->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
