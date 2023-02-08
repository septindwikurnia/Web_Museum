@extends('template')

@section('main')

<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Human Resources</h2>
          </div>
        </div>
        @if(!empty($pj_museum_list))
        <div class="row">
        @foreach($pj_museum_list as $pj_museum)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
            @if(!empty($pj_museum->image_pj))
              <img src="{{ asset('images_pj/'.$pj_museum->image_pj) }}" alt="Image" class="img-fluid" ></a>
              </a>
            @else
              <img src="{{ asset('images_pj/default.png') }}" alt="Image" class="img-fluid"></a>
            @endif
              <div class="p-4">
                <h3 class="heading mb-3">{{$pj_museum->nama_pj}}</a></h3>
                <p>{{$pj_museum->jabatan}}</p>
                <p><a href="{{ url('penanggungjawab/' . $pj_museum->id . '/editpj') }}" class="text-primary">Edit <span class="icon-pencil-square-o small"></span></a>
                <a href="{{ url('penanggungjawab/' . $pj_museum->id . '/delete') }}" class="text-primary">Delete <span class="icon-trash-o small"></span></a></p>
              </div>
            </div>
          </div>
          @endforeach
        @endif
        </div>
        <div class="row form-group">
                <div class="col-md-12">
                  <a class="btn btn-primary pill px-4 py-2" type="button" href="{{ url('create') }}" >Create Human Resources</a>
                </div>
              </div> 
      </div>
    </div>
@stop