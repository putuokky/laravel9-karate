@extends('layouts.app')

@section('title', $title)

@push('style')
  <!-- CSS Libraries -->
@endpush

@section('main')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{ $title }}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">{{ $title }}</div>
        </div>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header border-bottom">
                <h4>Edit {{ $title }}</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ url('role/' . $roles->id) }}">
                  @method('put')
                  @csrf
                  <div class="form-group">
                    <label>Nama Role</label>
                    <input type="text" name="nama_role" id="nama_role" placeholder="Nama Role"
                      value="{{ old('nama_role', $roles->nama_role) }}"
                      class="form-control @error('nama_role') is-invalid @enderror">
                    @error('nama_role')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="card-footer text-right">
                    <a href="{{ url('role') }}" class="btn btn-dark">Back</a>
                    <button class="btn btn-primary">Edit</button>
                  </div>
                </form>
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

  <!-- Page Specific JS File -->
@endpush
