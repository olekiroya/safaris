
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New BlogBody Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New BlogBody</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                 <h3 class="card-title">
                  Add BlogBody
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('BlogBody.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="card-body">
                    <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Title </label>
                      <div class="col-sm-8 col-md-8">
                        <input type="text" class="form-control" name="title"  placeholder="title">
                      </div>
                        </div>
                    </div>


                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Blog Category</label>
                                  <div class="col-sm-8 col-md-8">
                                    <select name="blog_category" id="" class="form-control">
                                      <option value="">Select Blog Category</option>
                                        @foreach($Blogcategory as $data)
                                      <option>{{$data->blog_category}}</option>    @endforeach                                 
                                    </select>
                                  </div>
                                  </div>
                                </div>

                            </div>
                  <div class="col-md-12 col-sm-6 col-xs-12">
                       <label class="control-label" for="first-name">Blog Body/Description
                       </label>
                       <textarea name="blog_body"   class="form-control"></textarea>

                  </div>
     
                <hr>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label" for="first-name">Image</label>
                    <input name="attachment[]" type="file" id="main_img" multiple>
             </div>
             </div>
               

             <div class="form-group row">
              <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
                  </div>
                </div>

            </form>
          <!-- /.col-->
        </div>
    </section>
  </div>

@endsection
