
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MUSEUM SINGHASARI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link href="{{ URL::asset('fonts/icomoon/style.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    <link href="{{ URL::asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
   
</head>
<body>

  @include('navbar')
  @yield('main')
   

    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('js/aos.js')}}"></script>

    <script src="{{url('js/mediaelement-and-player.min.js')}}"></script>

    <script src="{{url('js/main.js')}}"></script>


    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>