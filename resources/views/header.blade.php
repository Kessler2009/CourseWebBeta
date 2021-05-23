
@section('header')
<link href="{{ asset('resources/css/mysitestyle.css') }}" rel="stylesheet"  >
<link rel="stylesheet" href="resources/css/mysitestyle.css" />
<link rel="stylesheet" href="../css/bootstrap-grid.min.css" />

<div class="header">
    <div class="sitelogo">
        <a href="index.blade.php"><img src="resources/images/sun-tech-logo-lite.png" alt="Sun-Tech - лідер на ринку сонячних батарей"
                         title="На головну" class="imgsitelogo"></a>
    </div>


    <div class="menu" id="myTopnav">
        <ul>

            <li><a href="index.html#systems">Готові системи</a></li>
            <li><a href="tovary.html">Товари</a></li>
            <li><a href="index.html#ourprojects">Проєкти</a></li>
            <li><a href="index.html#aboutcompany">Про компанію</a></li>
            <li><a href="#contacts">Контакти</a></li>
            <li>                <button type="button" class="btn btn-info1" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Кошик <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Всього: <span class="text-info1">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info1"> ₴{{ $details['price'] }}</span> <span class="count"> Кількість:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-warning btn-block">Перейти до кошика</a>
                        </div>
                    </div>
                </div></li>
        </ul>








        <a href="javascript:void(0);" class="icon" onclick="myFunction()">



            <i class="fa fa-bars"></i>
        </a>
    </div>

    </div>




@endsection
