@extends('template')

@section('main')
    <div id="penanggungjawab">
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Create Human Resources</h2>
          </div>   
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="{{ url('simpan')}}" class="p-5 bg-white" method="post" enctype="multipart/form-data" >
            {{ csrf_field () }}

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nama_pj">Full Name</label>
                  <input type="text" name="nama_pj" class="form-control" placeholder="Full Name">
                </div>
              </div>

              <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="gender">Gender</label>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="P" checked>
                  <label class="form-check-label" for="gender">Female</label>
                </div>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="L" checked>
                  <label class="form-check-label" for="gender">Male</label>
                </div>
              </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="jabatan">Position</label>
                  <input type="text" name="jabatan" class="form-control" placeholder="Position">
                </div>
              </div>
              
              <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="image_pj">Image</label>
                <input name="image_pj" type="file" class="form-control" style="padding: 3px; padding-left: 5px;">
                </div>
                </div>

              <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                  <input type="submit" value="Submit" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>
@stop