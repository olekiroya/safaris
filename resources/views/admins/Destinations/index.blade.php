
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Destinations Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Destinations Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Destionations</h3>
          <div class="card-tools">
            <a href="{{ route('destinations.create') }}" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Destination
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Popularity</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)
                  <tr>
                      <td>{{ $data->id }}</td>
                    <td><a href="{{ route('destinations.show',$data->id) }}">{{ $data->destination_name }}</a></td>
                    <td>{{ $data->destination_description }}</td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->popularity }}</td>
                  </tr>
                @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Popularity</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
