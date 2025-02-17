@php
$settings=\App\Http\Controllers\HomeController::getSetting();
@endphp
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright © Company <a href="{{route('anasayfa')}}">{{$settings->company}} </a>. 2021 Desıgned by FERHAT AKTÜRK</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@yield('js1')
<!-- Additional Scripts -->
<script src="{{asset('assets')}}/assets/js/custom.js"></script>
<script src="{{asset('assets')}}/assets/js/owl.js"></script>

<script>
    $('.uclu_galeri').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
</script>
