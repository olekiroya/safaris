  @extends('admins.layouts.Apps.app')
  @section('contents')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Attraction Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Attraction Page</li>
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
          <h3 class="card-title">Attraction</h3>

          <div class="card-tools">
            <a href="{{ route('Attraction.create') }}" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Attraction
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>                  
                    <th>Description</th>
                    <th>Tour Circuit</th>
                    <th>Attachment</th>                 
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($datas as $data)
                  <tr>
                    <td>{{ $data->id }}</td>
                    <td><a href="{{ route('EditAttraction',$data->id) }}">{{ $data->attraction_title }}</a></td>                    
                    <td>{{ $data->attraction_description }}</td>
                     <td>{{ $data->tour_circuit }}</td>
                    <td>{{ $data->attachment }}</td>
                    <td><a href="{{ route('EditAttraction',$data->id) }}"><i class="fa fa-edit"></i></a> <a href="#"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                     <th>#</th>
                    <th>Title</th>                  
                    <th>Description</th>
                    <th>Tour Circuit</th>
                         <th>Attachment</th>                 
                    <th>Action</th>
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
