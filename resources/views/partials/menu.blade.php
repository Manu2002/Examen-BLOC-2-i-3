<div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <div class="nav-inner">
                                    <ul class="nav main-menu menu navbar-nav">
                                        <li class="active"><a href="/">Home</a></li>
                                        <li><a href="#">Tenda<i class="ti-angle-down"></i><span class="new">New</span></a>
                                            <ul class="dropdown">
                                                @if (Auth::user() && Auth::user()->admin)
                                                    <li><a href="{{route('ofertas.create')}}">Nou Producte</a></li>
                                                @endif
                                                <li><a href="cart.html">Carret</a></li>
                                                <li><a href="checkout.html">Compra</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contacte">Contacta amb nosaltres</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Header Inner -->
</header>
