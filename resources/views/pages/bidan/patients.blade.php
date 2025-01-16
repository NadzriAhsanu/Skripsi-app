@extends('pages.bidan.layouts.app')

@section('title', 'Patients')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Patients</h1>
                {{-- <div class="section-header-button">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Add New</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Patients</a></div>
                    <div class="breadcrumb-item">All Patients</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('pages.bidan.layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Patients</h2>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="nik">
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
                                            <th>NIK</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Birth Date</th>
                                            <th>Created At</th>

                                        </tr>
                                        @foreach ($patients as $patient)
                                            <tr>
                                                <td>{{ $patient->patient_nik }}
                                                </td>
                                                <td>{{ $patient->patient_name }}
                                                </td>
                                                <td>
                                                    {{ $patient->patient_email }}
                                                </td>
                                                <td>
                                                    {{ $patient->patient_phone }}
                                                </td>
                                                <td>
                                                    {{ $patient->birth_date }}
                                                </td>
                                                <td>
                                                    {{ $patient->address_line }}
                                                </td>
                                                <td>{{ $patient->created_at }}</td>
                                                <td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('bidan.createRekamMedis', $patient->id) }}'
                                                                class="btn btn-sm btn-info btn-icon">
                                                                <i class="fas fa-edit"></i>
                                                                Isi Rekam Medis
                                                            </a>

                                                            <form action="{{ route('bidan.destroyRekamMedis', $patient->id) }}"
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
                                <div class="float-right">
                                <div class="float-right">
                                    <div class="float-right">
                                </div>
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
