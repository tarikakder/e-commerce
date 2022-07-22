@extends('layouts.master')
@section('title',$category->category_name)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('mainpage')}}">Anasayfa</a></li>
            <li class="active">{{$category->category_name}}</li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$category->category_name}}</div>
                    <div class="panel-body">
                        @if(count($sub_categories) > 0)
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                            @foreach($sub_categories as $sub_category)
                            <a href="{{route('category',$sub_category->slug)}}" class="list-group-item"><i class="fa fa-television"></i> {{$sub_category->category_name}}</a>
                            @endforeach
                        </div>
                        @else
                            <div class="col-md-12">Bu kategoride başka alt kategori yok :(</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
{{--                    @if(count($products) > 0)--}}
{{--                    Sırala--}}
{{--                    <a href="#" class="btn btn-default">Çok Satanlar</a>--}}
{{--                    <a href="#" class="btn btn-default">Yeni Ürünler</a>--}}
{{--                    <hr>--}}
{{--                    @endif--}}
                    <div class="row">
{{--                        @if(count($products) == 0)--}}
{{--                            <div class="row">Bu Kategoride ürün Yok :(</div>--}}
{{--                        @endif--}}
                        @if(!empty($products))
                        @foreach($products as $product)
                        <div class="col-md-3 product">
                            <a href="{{route('product',$product->slug)}}"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a></p>
                            <p class="price">{{$product->product_amount}}₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                            @endforeach
                        @else
                            <div class="col-md-3 product">
                            <div class="col-md-12">Bu kategoride ürün yok :(</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
