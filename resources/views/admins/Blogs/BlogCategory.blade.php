
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog Category Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Add New Blog Category
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('BlogCategory.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="card-body">
                    <div class="row">

                   
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="blog" class="col-sm-4 col-md-4col-form-label">Blog Category</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="text" class="form-control" name="blog"  placeholder="blog">
                          </div>
                            </div>
                        </div>                    

                  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group row">

                 <div>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
             </div>
            </div>
            </div>

            </form>
          <!-- /.col-->
        </div>
    </section>



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Blog Category</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Blog Category</th>                 
                                  
                     </tr>
                  </thead>
                  <tbody>
                   @foreach ($Blogcategory as $data)
                  <tr>
                    <td>{{ $data->id }}</td>
                    <td><a href="#"> {{ $data->blog_category}}</a></td>
                  </tr>
                  @endforeach
                  </tbody>

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

<script type="text/javascript">
  
  function getComboA(selectObject) {
  var value = selectObject.value;  
  console.log(value);
}
</script>