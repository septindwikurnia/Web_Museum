@extends('template')

@section('main')
    <div id="penanggungjawab">
    <div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Edit Human Resources</h2>
          </div>   
    <div class="col-md-12 col-lg-8 mb-5">
        <form action="{{ url('penanggungjawab/' .$pj_museum->id. '/updatepj') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }} 

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="nama_pj" class="control-label">Full Name </label>
                <input name="nama_pj" type="text" class="form-control" value="{{ $pj_museum->nama_pj }}" placeholder="Full Name" >
            </div>
            </div>

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="gender" class="control-label">Gender</label>
                @if($pj_museum->gender=="P")
                <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">    
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="P" checked>
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="L">
                <label class="form-check-label" for="gender">
                    Male 
                </label>
            </div>
            </div>
            </div>
            </div>
            </div>

            @else ($pj_museum->gender=="L")
            
            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0"> 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="P">
                <label class="form-check-label" for="gender">
                    Female
                </label>
            </div>

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0"> 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="L" checked>
                <label class="form-check-label" for="gender">
                    Male 
                </label>
            </div>
            </div>
            </div>
            @endif

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="image_pj" class="control-label">Image Human Resources</label>
                <input name="image_pj" type="file" class="form-control" >
            </div>
            </div>

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="jabatan" class="control-label">Position </label>
                <input name="jabatan" type="text" class="form-control" value="{{ $pj_museum->jabatan }}">
            </div>
            </div>

            <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/museum2/public/penanggungjawab'">Back</button>
            </div>
            </div>
    </form>
</div>
</div>
</div>
</div>
@stop