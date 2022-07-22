@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($categories as $category)
                        <a href="{{route('category',$category->slug)}}" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-right"></i> {{$category->category_name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=0; $i<count($products_slider); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="{{$i==0?'active':''}}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($products_slider as $index=>$product_detail)
                        <div class="item {{$index==0?'active':''}}">
                            <img src="http://lorempixel.com/640/400/food/1" alt="...">
                            <div class="carousel-caption">
                                {{$product_detail->product->product_name}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="{{ route('product',$opportunity_product_day->slug) }}">
                            <img src="http://lorempixel.com/400/485/food/1" class="img-responsive">
                            {{$opportunity_product_day->product_name}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($products_featured as $index=>$product_detail)
                        <div class="col-md-3 product">
                            <a href="{{route('product',$product_detail->product->slug)}}"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="{{route('product',$product_detail->product->slug)}}">{{$product_detail->product->product_name}}</a></p>
                            <p class="price">{{$product_detail->product->product_amount}} ₺</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($products_bestseller as $product_detail)
                        <div class="col-md-3 product">
                            <a href="{{route('product',$product_detail->product->slug)}}><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="{{route('product',$product_detail->product->slug)}}">{{$product_detail->product->product_name}}</a></p>
                            <p class="price">{{$product_detail->product->product_amount}} ₺</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($products_discount as $product_detail)
                            <div class="col-md-3 product">
                                <a href="{{route('product',$product_detail->product->slug)}}><img src="http://lorempixel.com/400/400/food/1"></a>
                                <p><a href="{{route('product',$product_detail->product->slug)}}">{{$product_detail->product->product_name}}</a></p>
                                <p class="price">{{$product_detail->product->product_amount}} ₺</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
