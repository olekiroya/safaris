
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Destination Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Destinations</li>
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
                  Add Destination
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('destinations.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
               @csrf
               <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <label>Destination Name</label>
                        <input type="text" class="form-control" name="destination_name" placeholder="Destination Name">
                        </div>


                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                  <div class="col-sm-8 col-md-6">
                                         <label for="">Category</label>
                                    <select name="category" class="">
                                      <option value="">--Select category--</option>
                                      <option>Wildlife Safaris</option>
                                      <option>Hiking & Trekking</option>
                                      <option>Beach Holidays</option>
                                      <option>Other</option>
                                    </select>
                                   </div>
                              </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group row">

                                      <div class="col-sm-8 col-md-6">
                                        <label for="">Location</label>
                                        <select name="location_id">
                                          <option value="0">--Select location--</option>
                                          @foreach($locations as $location)
                                           <option value="{{$location->id}}">{{$location->location_name}}</option>
                                           @endforeach
                                        </select>
                                      </div>
                                        </div>
                                    </div>
                                       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group row">

                                      <div class="col-sm-8 col-md-6">
                                        <label for="">Popularity</label>
                                        <select name="popularity">
                                          <option value="">--Rate popularity--</option>
                                          <option>Very Popular</option>
                                          <option>Popular</option>
                                          <option>Normal</option>
                                        </select>
                                      </div>
                                        </div>
                                    </div>
              </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                      <label class="control-label" for="first-name">Descriptions
                       </label>
                       <textarea name="destination_description" class="form-control" cols="10" rows="10"></textarea>
                  </div>

                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <label class="control-label" for="first-name">SEO </label>
                    <textarea name="seo" class="form-control"  maxlength="200" class="form-control"></textarea>
                </div>



                  <div class="form-group row">
          <div class="col-md-6 col-sm-6 col-xs-12">
                 <label class="control-label" for="first-name">Upload Image</label>
                 <input name="attachment[]" type="file" id="main_img" multiple>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">

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
