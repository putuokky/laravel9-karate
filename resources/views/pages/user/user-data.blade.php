@extends('layouts.app')

@section('title', $title)

@push('style')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
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
              {{-- <div class="card-header">
                <h4>{{ $title }}</h4>
              </div> --}}
              <div class="card-body">
                {{-- <div class="list-unstyled list-unstyled-border mt-4">
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Browser Icons</h6>
                      <p>by Marina D</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Bootstrap</h6>
                      <p>by @mdo and @fat</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Bootstrap Color Picker</h6>
                      <p>by Javi Aguilar</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Bootstrap Date Range</h6>
                      <p>by Dan Grossman</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Bootstrap Social Button</h6>
                      <p>by Panayiotis Lipiridis</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Bootstrap Tags Input</h6>
                      <p>by Schlechter</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Timepicker</h6>
                      <p>by @jdewit</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Chocolat</h6>
                      <p>by @nicolas-t</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Cleave.JS</h6>
                      <p>by @nosir</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Codemirror</h6>
                      <p>by Marijn Haverbeke</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>DataTables</h6>
                      <p>by @datatables</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Dropzone.JS</h6>
                      <p>by Matias Meno</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Flag Icon CSS</h6>
                      <p>by Panayiotis Lipiridis</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Font Awesome</h6>
                      <p>by @fontawesome</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Full Calendar</h6>
                      <p>by Adam Shaw</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>IonIcons</h6>
                      <p>by Ionic Framework</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>jQuery</h6>
                      <p>by The jQuery Foundation</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>jQuery PWStrength</h6>
                      <p>by Mato Ilic</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>jQuery Selectric</h6>
                      <p>by Leonardo Santos</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>jQuery UI</h6>
                      <p>by The jQuery Foundation</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>jQuery Vector Map</h6>
                      <p>by Manifest Interactive</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>NiceScroll</h6>
                      <p>by InuYaksa</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>OwlCarousel</h6>
                      <p>by David Deutsch</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Prism</h6>
                      <p>by @PrismJS</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Select2</h6>
                      <p>by Kevin Brown and Igor Vaynberg</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Simple Weather</h6>
                      <p>by James Fleeting</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Summernote</h6>
                      <p>by Alan Hong</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Sweet Alert</h6>
                      <p>by Tristan Edwards</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>iziToast</h6>
                      <p>by Dolce</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Upload Preview</h6>
                      <p>by Opoloo</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Weather Icon</h6>
                      <p>by Erik Flowers</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Chart.JS</h6>
                      <p>by Nick Downie</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>GMaps.JS</h6>
                      <p>by Gustavo Leon</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Sparkline</h6>
                      <p>by Gareth Watts</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Moment</h6>
                      <p>by @moment</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Popper.JS</h6>
                      <p>by Federico Zivolo</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon"><i class="far fa-circle"></i></div>
                    <div class="media-body">
                      <h6>Tooltip.JS</h6>
                      <p>by Federico Zivolo</p>
                    </div>
                  </div>
                </div> --}}
                <div class="table-responsive">
                  <table class="table-striped table" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Task Name</th>
                        <th>Progress</th>
                        <th>Members</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
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
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          2
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
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          3
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
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>
                          4
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
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
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
  <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
