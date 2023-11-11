@extends('layouts.app')

@section('title', $title)

@push('style')
  <!-- CSS Libraries -->
@endpush

@section('main')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah {{ $title }}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">{{ $title }}</div>
        </div>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
              {{-- <div class="card-header">
                <h4>{{ $title }}</h4>
              </div> --}}
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas optio cumque nihil ipsum eum rem at
                blanditiis beatae voluptas aspernatur autem recusandae, aut qui quasi, corrupti, nulla deleniti modi
                velit.
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
