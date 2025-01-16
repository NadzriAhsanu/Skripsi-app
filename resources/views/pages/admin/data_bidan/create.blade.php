@extends('layouts.app')

@section('title', 'Advanced Forms')

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
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Bidans</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Bidans</h2>



                <div class="card">
                    <form action="{{ route('data-bidans.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        {{-- bidan_name --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('bidan_name')
                                is-invalid
                            @enderror"
                                    name="bidan_name">
                                @error('bidan_name')
                                    <div class="invalid-feedback">
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- birtg_date --}}
                            <div class="form-group mt-3">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                            </div>
                            {{-- bidan_phone --}}
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number"
                                        class="form-control @error('bidan_phone')
                                    is-invalid
                                @enderror"
                                        name="bidan_phone">
                                    @error('bidan_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- bidan_email --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('bidan_email')
                                is-invalid
                            @enderror"
                                    name="bidan_email">
                                @error('bidan_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- bidan_password --}}
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password"
                                        class="form-control @error('bidan_password')
                                is-invalid
                            @enderror"
                                        name="bidan_password">
                                </div>
                                @error('bidan_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- photo --}}
                            <div class="form-group">
                                <label class="form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="photo"
                                    @error('photo') is-invalid @enderror>
                                </div>
                                @error('photo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            {{-- address bidan --}}
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text"
                                    class="form-control @error('address')
                                is-invalid
                            @enderror"
                                    name="address">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- SIP Bidan --}}
                            <div class="form-group">
                                <label>Sip</label>
                                <input type="text"
                                    class="form-control @error('sip')
                                is-invalid
                            @enderror"
                                    name="sip">
                                @error('sip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- ID IHS  --}}
                            <div class="form-group">
                                <label>ID IHS</label>
                                <input type="text"
                                    class="form-control @error('id_ihs')
                                is-invalid
                            @enderror"
                                    name="id_ihs">
                                @error('id_ihs')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- NIK Bidan --}}
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number"
                                    class="form-control @error('nik')
                                is-invalid
                            @enderror"
                                    name="nik">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Roles</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="role" value="bidan" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Bidan</span>
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


'bidan_name',
'bidan_email',
'bidan_phone',
'bidan_password',
'role',
'photo',
'address',
'sip',
'id_ihs',
'nik',
'birth_date'