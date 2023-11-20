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
                <h4>Ubah {{ $title }}</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="form-group mb-0">
                    <label>Message</label>
                    <textarea class="form-control" data-height="150" required=""></textarea>
                  </div>
                  <div class="card-footer text-right">
                    <a href="{{ url('user') }}" class="btn btn-dark">Back</a>
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
