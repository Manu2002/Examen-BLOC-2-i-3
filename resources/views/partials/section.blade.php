<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($categories as $categoria)
                                @if($categoria->id === 1)
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#{{$categoria->id}}" role="tab">{{$categoria->title}}</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{$categoria->id}}" role="tab">{{$categoria->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        @foreach($gangas as $key => $gangaPorCategoria)
                            <div class="tab-pane fade show @if($key == 1) active @endif" id="{{$key}}" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach($gangaPorCategoria as $ganga )
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="{{route('oferta.show', $ganga->id)}}">
                                                            @if($ganga->img)
                                                                <img class="default-img" src="{{$ganga->img}}" alt="#">
                                                            @else
                                                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                            @endif
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <a title="Add to cart" href="#">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="{{route('oferta.show', $ganga->id)}}">{{$ganga->title}}</a></h3>
                                                        <div class="product-price">
                                                            @if($ganga->discount_price)
                                                                {{$ganga->discount_price??''}} $ -
                                                                <span class="text-muted text-decoration-line-through">{{$ganga->price}} $</span>
                                                            @else
                                                                {{$ganga->original_price}} $
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
