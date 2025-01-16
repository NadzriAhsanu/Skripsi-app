@extends('layouts.app')

@section('title', 'Rekam Medis')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Rekam Medis</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Rekam Medis Pasien</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Rekam Medis Pasien</h2>



                <div class="card">
                    <form action="{{ route('data-rekam-medis.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('patient_id')
                                is-invalid
                            @enderror"
                                    name="patient_id">
                                @error('patient_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- buatkan fitur menambahkan bidan dari database --}}
                           <div class="form-group mt-3">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                        </div>
                            <div class="form-group">
                                <label>Diagnosa</label>
                                <input type="text"
                                    class="form-control @error('diagnosa')
                                is-invalid
                            @enderror"
                                    name="diagnosa">
                                @error('diagnosa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            <div class="form-group">
                                <label>Tekanan Darah</label>
                                <input type="text"
                                    class="form-control @error('tekanan_darah')
                                is-invalid
                            @enderror"
                                    name="tekanan_darah">
                                @error('tekanan_darah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nafas</label>
                                <input type="text"
                                    class="form-control @error('nafas')
                                is-invalid
                            @enderror"
                                    name="nafas">
                                @error('nafas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nadi</label>
                                <input type="text"
                                    class="form-control @error('nadi')
                                is-invalid
                            @enderror"
                                    name="nadi">
                                @error('nadi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Suhu</label>
                                <input type="text"
                                    class="form-control @error('suhu')
                                is-invalid
                            @enderror"
                                    name="suhu">
                                @error('suhu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                <input type="text"
                                    class="form-control @error('tinggi_badan')
                                is-invalid
                            @enderror"
                                    name="tinggi_badan">
                                @error('tinggi_badan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Berat Badan</label>
                                <input type="text"
                                    class="form-control @error('berat_badan')
                                is-invalid
                            @enderror"
                                    name="berat_badan">
                                @error('berat_badan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Roles</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="role" value="patient" class="selectgroup-input">
                                        <span class="selectgroup-button">Pasien</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush


        'diagnosa',
        'tekanan_darah',
        'nafas',
        'nadi',
        'suhu',
        'tinggi_badan',
        'berat_badan',
