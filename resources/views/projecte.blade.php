@include('partials.header')
@include('partials.menu')
<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">
                                    <h1><span>UP TO 50% OFF </span>Gangues Escandaloses</h1>
                                    <p>Ací trobaras <br> les ganges més grans <br> de tota la web.</p>
                                    <div class="button">
                                        <a href="{{route('ofertas.index')}}" class="btn">Compra Ara !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->
@include('partials.section')
@include('partials.footer')
