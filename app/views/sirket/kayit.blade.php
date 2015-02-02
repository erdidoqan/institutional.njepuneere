@extends('layouts.auth')

@section('title')
<title>Registration | Njepuneere</title>
@stop

@section('content')
    
<section id="widget-grid" class="">
    <div class="row">
        <div class="jarviswidget" data-widget-deletebutton="false" data-widget-editbutton="false">
            <header>
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2>Registration form <small>Try it Free! </small> </h2>             
            </header>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                        </div>
                    @endif
                     @if ($errors->has())
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Error!</strong> {{$errors->first()}}
                    </div>
                    @endif
                    
                    @if (Session::has('error'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Error!</strong> {{Session::get('error')}}
                    </div>
                    @endif
                    
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Success!</strong> {{Session::get('success')}}
                    </div>
                    @endif   
                    <div class="widget-body no-padding">
                        {{ Form::open(array('url' => 'SirketKayit','id'=>'smart-form-register','class'=>'smart-form')) }}
                            <header>Personal Information</header>

                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('sname', '', array('class' => 'form-control', 'placeholder' => 'Surname')) }}
                                        </label>
                                    </section>
                                </div>
                                <section>
                                    <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                        {{ Form::text('email', '', array('placeholder' => 'Email address')) }}
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="gender">
                                                <option value="0" selected="" disabled="">Contact Phone</option>
                                                <option value="1">Cell Phone</option>
                                                <option value="2">Home Phone</option>
                                            </select> <i></i> </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-append fa fa-phone"></i>
                                        {{ Form::text('phone', '', array('class'=>'form-control','placeholder' => 'Phone','data-mask' => '(999) 99-999-9999')) }}
                                        </label>
                                    </section>
                                </div>

                                <section>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        {{ Form::password('pass', array('placeholder' => 'Password','id'=>'password')) }}
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                </section>

                                <section>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        {{ Form::password('passwordConfirm', array('placeholder' => 'Confirm password')) }}
                                        <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
                                </section>
                                
                            </fieldset>
                            <header>Company Information</header>
                            <fieldset>
                              <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('com_name', '', array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('com_nipt', '', array('class' => 'form-control', 'placeholder' => 'NIPT')) }}
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('com_sector', '', array('class' => 'form-control', 'placeholder' => 'Company Sector')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('nr_emp', '', array('class' => 'form-control', 'placeholder' => 'Number of Employee')) }}
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('com_add', '', array('class' => 'form-control', 'placeholder' => 'Company Adrress')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('zip_code', '', array('class' => 'form-control', 'placeholder' => 'Zip Code')) }}
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('country', '', array('class' => 'form-control', 'placeholder' => 'Country')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('city', '', array('class' => 'form-control', 'placeholder' => 'City')) }}
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('web_add', '', array('class' => 'form-control', 'placeholder' => 'Web Site')) }}
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            {{ Form::text('fax', '', array('class' => 'form-control', 'placeholder' => 'Fax Number')) }}
                                        </label>
                                    </section>
                                </div>
                                </fieldset>
                            
                            <fieldset>
                                <section>
                                    <label class="checkbox">
                                        <input type="checkbox" name="subscription" id="subscription">
                                        <i></i>I want to receive news and special offers</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="terms" id="terms">
                                        <i></i>I agree with the Terms and Conditions</label>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <button type="cancel" class="btn btn-default">
                                    Clear
                                </button>
                            </footer>
                        {{ Form::close() }}              
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop