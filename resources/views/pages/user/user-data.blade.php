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
                  <a href="{{ url('user/create') }}" class="btn btn-outline-primary"><i
                      class="fa-solid fa-plus fa-beat-fade"></i>
                    Tambah</a>
                </div>
                {{-- <hr> --}}
                <div class="table-responsive">
                  <table class="table-hover table" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Action</th>
                        <th>Task Name</th>
                        <th>Progress</th>
                        <th>Members</th>
                        <th>Due Date</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" class="btn btn-outline-warning"><i --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" class="btn btn-outline-warning"><i --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" class="btn btn-outline-warning"><i --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" class="btn btn-outline-warning"><i --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Create a mobile app</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>2018-01-20</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Redesign homepage</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                            <div class="progress-bar" data-width="0"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Nur Alpiana">
                          <img alt="image" src="{{ asset('img/avatar/avatar-3.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Hariono Yusup">
                          <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                        </td>
                        <td>2018-04-10</td>
                        <td>
                          <div class="badge badge-info">Todo</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Backup database</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                            <div class="progress-bar bg-warning" data-width="70%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Rizal Fakhri">
                          <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Hasan Basri">
                        </td>
                        <td>2018-01-29</td>
                        <td>
                          <div class="badge badge-warning">In Progress</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        {{-- <td><a href="{{ url('user/' . $id . '/edit') }}" title="Ubah" --}}
                        <td><a href="#" title="Ubah" class="btn btn-outline-warning"><i
                              class="fa-solid fa-pencil"></i></a>
                          <a href="#" title="Hapus" class="btn btn-outline-danger"><i
                              class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>Input data</td>
                        <td class="align-middle">
                          <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                            <div class="progress-bar bg-success" data-width="100%"></div>
                          </div>
                        </td>
                        <td>
                          <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Rizal Fakhri">
                          <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                          <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Yudi Nawawi">
                          <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle"
                            width="35" data-toggle="tooltip" title="Khaerul Anwar">
                        </td>
                        <td>2018-01-16</td>
                        <td>
                          <div class="badge badge-success">Completed</div>
                        </td>
                      </tr>
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
  <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
