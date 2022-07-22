@extends('layouts.master')
@section('title',$product->product_name)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Anasayfa</a></li>
            @foreach($product->categories()->distinct()->get() as $category)
            <li><a href="{{route('category',$category->slug)}}">{{$category->category_name}}</a></li>
            @endforeach
            <li class="active">{{$product->product_name}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="http://lorempixel.com/400/200/food/1">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/2"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/3"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/4"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$product->product_name}}</h1>
                    <p class="price">{{$product->price}}</p>
                    <form action="{{route('baskett.addd')}}" method="post">
{{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="submit" class="btn btn-theme" value="Sepete Ekle">
                    </form>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">
                        {{$product->product_description}}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="t2">t2</div>
                </div>
            </div>

        </div>
    </div>
@endsection
