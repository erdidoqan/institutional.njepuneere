 <head>
    @include('partials/header')

  </head>

  <body>
      @include('partials/nav')
@extends('layouts.auth')

<div class="col-md-5 col-md-offset-3" style="margin-top:54px;">
@if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </div>
            @endif
    <div class="panel panel-success">
                <div class="panel-heading">
                        <h3 class="panel-title">Üye Ol <small>Ücretsiz! </small></h3>
                        </div>
                        <div class="panel-body">
                       {{ Form::open(array('url' => 'BireyKayit')) }}
                            
                            <div class="panel-heading">
                        <h3 class="panel-title">Üyelik Bilgileri</h3>
                        </div>
                        <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('adi', '', array('class' => 'form-control input-sm', 'placeholder' => 'Adı')) }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('soyadi', '', array('class' => 'form-control input-sm', 'placeholder' => 'Soyadi')) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::text('email', '', array('class' => 'form-control input-sm', 'placeholder' => 'Email Adresi')) }}
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::password('sifre', array('class' => 'form-control input-sm', 'placeholder' => 'Sifre')) }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::password('sifreT', array('class' => 'form-control input-sm', 'placeholder' => 'Sifre Tekrar')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Kişisel Bilgiler</h3>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="mydate" placeholder="Select a date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        {{ Form::text('alan', '', array('class' => 'form-control input-sm', 'placeholder' => 'Alan')) }}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        {{ Form::text('operator', '', array('class' => 'form-control input-sm', 'placeholder' => 'Operator')) }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('tel', '', array('class' => 'form-control input-sm', 'placeholder' => 'Cep Telefonu')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('ulke', '', array('class' => 'form-control input-sm', 'placeholder' => 'Ulke')) }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('sehir', '', array('class' => 'form-control input-sm', 'placeholder' => 'Sehir')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Eğitim Bilgileri </h3>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{ Form::text('uni', '', array('class' => 'form-control input-sm', 'placeholder' => 'Seciniz')) }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="password_confirmation"  class="form-control input-sm" placeholder="Seçiniz">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Son iş tecrübesi </h3>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{ Form::text('sonis', '', array('class' => 'form-control input-sm', 'placeholder' => 'Son İş Tecrübesi')) }}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        {{ Form::text('durum', '', array('class' => 'form-control input-sm', 'placeholder' => 'Çalışma Durumu')) }}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                <input type="radio"> Hizmet sözleşmesini kabul ediyorum 
                                </div>
                                </div>
                            </div>
                             {{ Form::submit('Kayıt Ol', array('class' => 'btn btn-success btn-block')) }}
                        {{ Form::close() }}
                    </div>
                </div>

</div>
</body>