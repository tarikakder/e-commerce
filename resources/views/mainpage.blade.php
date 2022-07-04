<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eticaret</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body id="commerce">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="img/logo.png">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" id="navbar-search" class="form-control" placeholder="Ara">
                    <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme">5</span></a></li>
                <li><a href="#">Oturum Aç</a></li>
                <li><a href="#">Kaydol</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Siparişlerim</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Çıkış</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Kategoriler</div>
                <div class="list-group categories">
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://lorempixel.com/640/400/food/1" alt="...">
                        <div class="carousel-caption">
                            Slide 1
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/640/400/food/2" alt="...">
                        <div class="carousel-caption">
                            Slide 2
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/640/400/food/3" alt="...">
                        <div class="carousel-caption">
                            Slide 3
                        </div>
                    </div>
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
                    <a href="#">
                        <img src="http://lorempixel.com/400/485/food/1" class="img-responsive">
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
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
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
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="panel panel-theme">
            <div class="panel-heading">İndirimli Ürünler</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                    <div class="col-md-3 product">
                        <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                        <p><a href="#">Ürün adı</a></p>
                        <p class="price">129 ₺</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">Eticaret Yazılımı &copy; 2017</div>
            <div class="col-md-6 text-right"><a href="http://www.uzaktankurs.com">Uzaktan Kurs</a></div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
