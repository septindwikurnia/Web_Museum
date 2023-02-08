<div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap js-site-navbar bg-white">
  
  <div class="container">
    <div class="site-navbar bg-light">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="/home">MUSEUM SINGHASARI</a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                
                <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href={{ url('/') }}>Home</a></li>
                  <li><a href={{ url('lokasi') }}>Route</a></li>
                  <li><a href={{ url('penanggungjawab') }}>Human Resources</a></li>
                  <li><a href={{ url('vision') }}>Vision and Mission</a></li>
                  <li><a href={{ url('infras') }}>Infrastructure</a>
                  <li class="has-children">
                  <a>Collection</a>
                  <ul class="dropdown arrow-top">
                          <li><a href={{ url('cao') }}>Cultural Art Objects</a></li>
                          <li><a href={{ url('crm') }}>Cultural Reserve Mockup</a></li>
                          <li><a href={{ url('diorama') }}>Diorama</a></li>
                          <li><a href={{ url('statue') }}>Statue</a></li>
                          <li><a href={{ url('artific') }}>Artificial Collection</a></li>
                          <li><a href={{ url('library') }}>Library</a></li>
                        </ul>
                      </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url('{{asset('images/museum1.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">{{ $halaman }}</h1>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover overlay" style="background-image: url('{{asset('images/museum2.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">

              <h1 class="mb-2">Welcome To Museum Singhasari</h1>
              <h2 class="caption">KABUPATEN MALANG</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url('{{asset('images/museum3.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">History Is The Key To Civilization</h1>
            </div>
          </div>
        </div>
      </div> 

    </div>