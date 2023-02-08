@extends('template')

@section('main')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Route</h2>
          </div>
  <iframe style="border:15px; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15808.528458632254!2d112.641053!3d-7.881243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7a397a9bba06247!2sMuseum%20Singhasari!5e0!3m2!1sid!2sid!4v1597044466126!5m2!1sid!2sid" frameborder="10px" allowfullscreen></iframe>
</div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="{{ url('simpan_saran')}}" class="p-5 bg-white" method="post">
            {{ csrf_field () }}

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="name">Full Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" name="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Perumahan Singhasari Residence, Desa Klampok, Kecamatan Singosari, Kabupaten Malang.</p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-4"><a href="#">bidangbudayakabmalang5@gmail.com</a></p>

              <p class="mb-0 font-weight-bold">Social Media</p>
              <p class="mb-0"><a href="https://instagram.com/museumsinghasari?igshid=1r5px1aksct33">Instagram : @museumsinghasari</a></p>
              <p class="mb-4"><a href="https://www.facebook.com/singhasari.singhasari.73">Facebook : @museumsinghasari</a></p>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>

@stop