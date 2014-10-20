 <head>
    @include('partials/header')

  </head>

  <body>
      @include('partials/nav')

@extends('layouts.auth')

@section('content')

<div class="col-md-12" style="margin-top:30px;">
   
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
              <div class="container">    
        <div id="loginbox" class="mainbox col-md-4">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Employer Login</div>
                    </div>     

            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                {{ Form::open(array('url' => 'SirketGiris')) }}
                
                    @if($errors->has('email'))
                            @foreach($errors->get('email') as $message)
                            <div>
                                    <span class="text-danger">{{ $message }}</span>
                                    </div>
                            @endforeach
                        @endif
                    <div style="margin-bottom: 15px" class="input-group {{ $errors->has('email') ? 'has-error' : false }}">

                        <p class="input-group-addon"><i class="glyphicon glyphicon-user"></i></p>
                        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'username or mail')) }}

                    </div>
                    
                    
                    @if($errors->has('pass'))
                            @foreach($errors->get('pass') as $message)
                                    <div>
                                    <span class="text-danger">{{ $message }}</span>
                                    </div>
                            @endforeach
                        @endif
                    <div style="margin-bottom: 15px" class="input-group {{ $errors->has('pass') ? 'has-error' : false }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::password('pass', array('class' => 'form-control', 'placeholder' => 'password')) }}
                        
                    </div>
                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                      </div>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                          {{ Form::submit('Login', array('class' => 'btn btn-success btn-block')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account! 
                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                Sign Up Here
                            </a>
                            </div>
                        </div>
                    </div>    
                {{ Form::close() }}



                        </div>                     
                    </div>  
        </div>


        

    <div id="loginbox" class="mainbox col-md-8">                    
        <div class="panel panel-primary" >
                <div class="panel-body loginTxtPanel">
                        
                   
                       <p> Keni mbaruar studimet dhe jeni në kërkim të një pune?</p>
                       <p> -Rregjistrohuni te <a href="http://njepuneere.com/"><strong>njepuneere.com</strong> </a> dhe lëreni sipërmarrësin të vijë te ju...</p>
                        <p>Apo jeni duke kërkuar punëtorin tuaj ideal dhe për këtë jeni në dilemë?</p>
                        <p>-Zgjidhi vetë ‘ngjyrat’ e punëtorit tënd të ri te <a href="http://njepuneere.com/"><strong>njepuneere.com</strong> </a></p>
                       <p> ... sepse nuk ka rëndesi çfarë pune bëni, e rëndësishme është si e bëni atë!.</p>
                    <div class="txtCntr mrgnTop15">
                        {{ HTML::link('SirketKayit', 'Sign Up Now', array('class' => 'btn btn-block btn-primary')) }}
                    </div>
                </div>                   
        </div>  
    </div>

    </div>

    
        </div>
    </div>
    
                   
</div>
</body>

@stop


