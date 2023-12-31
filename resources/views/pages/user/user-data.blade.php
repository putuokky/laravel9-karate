@extends('layouts.app')

@section('title', $title)

@push('style')
  <!-- CSS Libraries -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('library/datatables/media/css/dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('library/datatables/media/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('library/datatables/media/css/select.bootstrap4.min.css') }}">
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
              {{-- <div class="card-header border-bottom">
                <h4>{{ $title }}</h4>
              </div> --}}
              <div class="card-body">
                <div class="mb-3 border-bottom pb-3">
                  <a href="{{ url('user/create') }}" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>
                    Tambah</a>
                </div>
                <div class="table-responsive">
                  <table class="table-hover table" id="datatable">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Token</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td><a href="{{ url('user/' . $user->id . '/edit') }}" title="Edit"
                              class="btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></a>
                            <a href="{{ $user->id }}" title="Delete" class="btn btn-outline-danger"><i
                                class="fa-solid fa-trash"></i></a>
                          </td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->remember_token }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
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
  <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ asset('library/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('library/datatables/media/js/datatables.min.js') }}"></script>
  <script src="{{ asset('library/datatables/media/js/dataTables.select.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script>
    $("#datatable").dataTable();
  </script>
@endpush
