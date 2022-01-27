@include('partials.header')
@include('partials.menu')
<div class="d-flex d-flex justify-content-center vh-100">
    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
        <div class="single-product">
            <div class="product-img d-flex d-flex align-self-center">
                <a href="product-details.html">
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
            <div class="product-content ">
                <h3><a href="product-details.html">{{$ganga->title}}</a></h3>
                <a>Descripción: {{$ganga->description}}</a>
                <br>
                <a>Categoria: {{$categories[$ganga->category_id]->title}}</a>
                <br>
                <a>{{$ganga->points}} points</a>
                <div class="product-price">
                    @if($ganga->discount_price)
                        {{$ganga->discount_price??''}} $ -
                        <span class="text-muted text-decoration-line-through">{{$ganga->price}} $</span>
                    @else
                        {{$ganga->original_price}} $
                    @endif
                </div>
                <br>
                <button type="button" class="btn btn-dark"><a href="{{route('oferta.delete',$ganga->id)}}"><i class="bi bi-trash"></i>delete</a></button>

                <button type="button" class="btn btn-dark"><a href="{{route('ofertas.edit',$ganga->id)}}"><i class="bi bi-pencil"></i>edit</a></button>
                <br>
            </div>
        </div>
    </div>
</div>
<br>
@include('partials.footer')
