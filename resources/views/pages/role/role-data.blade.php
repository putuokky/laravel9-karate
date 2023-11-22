@extends('layouts.app')

@section('title', $title)

@push('style')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('library/izitoast/dist/css/iziToast.min.css') }}">

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
                  <a href="{{ url('role/create') }}" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i>
                    Add</a>
                </div>
                <div class="table-responsive">
                  <table class="table-hover table" id="datatable">
                    <thead>
                      <tr>
                        {{-- <th class="text-center">
                          #
                        </th> --}}
                        <th>Action</th>
                        <th>Nama Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($roles as $role)
                        <tr>
                          {{-- <td>{{ $loop->iteration }}</td> --}}
                          <td><a href="{{ url('role/' . $role->id . '/edit') }}" title="Edit"
                              class="btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></a>
                            <form method="POST" action="{{ url('role/' . $role->id) }}" class="d-inline">
                              @method('delete')
                              @csrf
                              <button title="Delete" class="btn btn-outline-danger" id="confirm_delete"><i
                                  class="fa-solid fa-trash"></i></button>
                            </form>
                          </td>
                          <td>{{ $role->nama_role }}</td>
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
  <script src="{{ asset('library/izitoast/dist/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ asset('library/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('library/datatables/media/js/datatables.min.js') }}"></script>
  <script src="{{ asset('library/datatables/media/js/dataTables.select.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script>
    $("#datatable").dataTable({
      "searching": false,
    });
  </script>
  <script>
    var title = "{{ $title }}";
    @if (session()->has('status'))
      iziToast.success({
        title: 'Success!',
        message: title + ' {{ session('status') }}',
        position: 'topRight'
      });
    @endif
  </script>
  <script>
    $('#confirm_delete').click(function(event) {
      var form = $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: 'Are you sure?',
          text: 'If you delete this data, it will be lost forever!',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
  </script>
@endpush
