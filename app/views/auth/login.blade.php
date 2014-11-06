 <head>
    @include('partials/header')

  </head>

  <body>
      @include('partials/nav')

@extends('layouts.auth')

@section('content')

<div class="col-md-3 col-md-offset-4" style="margin-top:54px;">
      <div class="panel panel-success">
        <div class="panel-heading">Lütfen Giris Yapınız!</div>
        <div class="panel-body">
            {{ Form::open(array('url' => 'BireyGiris')) }}
            @if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </div>
            @endif
            <div class="form-group">
                {{ Form::label('email', 'Email Adresiniz') }}
                {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Adresiniz')) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Sifre') }}
                {{ Form::password('sifre', array('class' => 'form-control', 'placeholder' => 'Sifre')) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Giris', array('class' => 'btn btn-success btn-block')) }}
            </div>
            <div class="form-group">
                {{ HTML::link('BireyKayit', 'Kayıt', array('class' => 'btn btn-primary btn-block')) }}
            </div>
            {{ Form::close() }}
        </div>
      </div>
</div>
</body>

@stop
