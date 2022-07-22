@extends('layouts.master')
@section('title','Kaydol')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kaydol</div>
                    <div class="panel-body">
                        @include('layouts.partials.errors')
                        <form class="form-horizontal" role="form" method="POST" action="{{route('user.register')}}">
{{csrf_field()}}
                            <div class="form-group {{$errors->has('username')?'has-error':''}}">
                                <label for="username" class="col-md-4 control-label">Kullanıcı Adı</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="username" value="" required autofocus>
                                    @if($errors->has('username'))
                                    <span class="help-block">
                                        <strong>Kullanıcı adı boş bırakılamaz</strong>
                                    </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('name')?'has-error':''}}">
                                <label for="name" class="col-md-4 control-label">İsim</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                    @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>İsim boş bırakılamaz</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('surname')?'has-error':''}}">
                                <label for="surname" class="col-md-4 control-label">Soyisim</label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="" required autofocus>
                                    @if($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>Soyisim boş bırakılamaz</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="email" class="col-md-4 control-label">Email</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control" name="email" value="" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Şifre (Tekrar)</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Kaydol
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
