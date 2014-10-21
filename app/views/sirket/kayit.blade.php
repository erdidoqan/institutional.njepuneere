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
        <div id="loginbox" class="mainbox col-md-12">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Employer Register</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                         @if($errors->has('email'))
                            @foreach($errors->get('email') as $message)
                            <div class="alert alert-danger">
                                    <span>Please fill in the red field (*)</span>
                                    </div>
                            @endforeach
                        @endif
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         {{ Form::open(array('url' => 'SirketKayit','class'=>'form-horizontal')) }}
        <div class="col-xs-6">
              <!-- Text input-->
              <legend>Authority Information</legend>
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Name:*</label>
                <div class="col-sm-8">
                  {{ Form::text('name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Surname:*</label>
                <div class="col-sm-8">
                  {{ Form::text('sname', '', array('class' => 'form-control input-sm', 'placeholder' => 'Surname')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
              <label class="col-sm-3 control-label" for="textinput">Gender:</label>
                <div class="col-sm-8">
                  {{ Form::label('male','Male') }}
                  {{ Form::radio('gender','Male','',array('id'=>'Male')) }}
                  {{ Form::label('female','Female') }}
                  {{ Form::radio('gender','Female','',array('id'=>'Female')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Birthday:</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    {{ Form::text('birthday', '', array('class' => 'form-control input-sm', 'data-mask' => '99/99/9999', 'data-mask-placeholder' => '-')) }}
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Phone:*</label>
                <div class="col-sm-8">
                  {{ Form::text('phone', '', array('class' => 'form-control input-sm', 'placeholder' => 'Contact Phone')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Email:*</label>
                <div class="col-sm-8">
                  {{ Form::text('email', '', array('class' => 'form-control input-sm', 'placeholder' => 'Email')) }}
                </div>
              </div>
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-3 control-label" for="textinput">Password:*</label>
                <div class="col-sm-8">
                  {{ Form::password('pass', array('class' => 'form-control input-sm', 'placeholder' => 'Password')) }}
                </div>
              </div>
      </div>
      <div class="col-xs-6">
              <legend>Company Information</legend>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Company Name:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_name', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Name')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Company Nipt:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_nipt', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Nipt')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Company Sector:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_sector', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Sector')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Employees:*</label>
                <div class="col-sm-8">
                  {{ Form::text('nr_emp', '', array('class' => 'form-control input-sm', 'placeholder' => 'Number of Employees')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Company Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('com_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Company Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Zip Code:*</label>
                <div class="col-sm-8">
                  {{ Form::text('zip_code', '', array('class' => 'form-control input-sm', 'placeholder' => 'Zip Code')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Country:*</label>
                <div class="col-sm-8">
                  {{ Form::text('country', '', array('class' => 'form-control input-sm', 'placeholder' => 'Country')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">City:*</label>
                <div class="col-sm-8">
                  {{ Form::text('city', '', array('class' => 'form-control input-sm', 'placeholder' => 'City')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Web Address:*</label>
                <div class="col-sm-8">
                  {{ Form::text('web_add', '', array('class' => 'form-control input-sm', 'placeholder' => 'Web Address')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group {{ $errors->has('pass') ? 'has-error' : false }}">
                <label class="col-sm-4 control-label" for="textinput">Fax Number:*</label>
                <div class="col-sm-8">
                  {{ Form::text('fax', '', array('class' => 'form-control input-sm', 'placeholder' => 'Fax Number')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput"></label>
                <div class="col-sm-8">
                  <a href="" data-toggle="modal" data-target="#myModal">I agree I have read the terms of use.</a>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Save and Continue  <span class="glyphicon glyphicon-forward"></span></button>
              </div>
            </div>
          </div>
      </div>
            {{ Form::close() }}
        </div>
        </div>                     
      </div>  
        </div>


    </div>

    
        </div>
    </div>
    
                   
</div>
</body>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="myModalLabel">Terms of use</h1>
      </div>
      <div class="modal-body">
       
        <p>1. Klienti nuk duhet t'i tregojë një personi të tretë informacionet e antarësimit të instuticionit, kodin, të dhënat personale të kandidatit dhe informacionet private (të veçanta). Të marrë masa, nëse është e nevojshme, për ruajtien e informacionit dhe mosdhënien e këtyre informacioneve një personi të tretë.
Si dhe të marrë përsipër ruajtien e tyre.
Klienti, perveç kësaj, në rast të ndryshimit të antarit përgjegjës që përdorte kodin e antarësimit të instuticionit, duhet të informojë menjëherë njepuneere.com.
Klienti nëse është kunder me instuticionin, prish menjëherë kontratën me njepuneere.com.
Gjithashtu mund të bëjë një kërkesë për t'iu shpaguar çdo lloj dëmi të bërë kundrejt tij. </p>
        <p>2. Klienti do të marrë atë që meriton nga njepuneere.com, por pa patur konfirmimin e shkruar nga njepuneere.com, nuk mund të caktojë dhe përshpejtojë detyrimet nga palët e treta.</p>
        <p>3. Klienti përveç lajmërimeve të shpërndara në njepuneere.com dhe aplikimet e bera në njepuneere.com nuk mund të kontrollojë nr. e fax-it, postën elektronike, ose faqen e internetit. Për më tepër nuk duhet të bëjë reklama, lajmërime etj. me mjetet dhe pa lejën e njepuneere.com.</p>
        
        <h2><kbd>esc</kbd> or click anyway to close</h4>
        
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
    
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    
    $(document).ready(function() {
      
      pageSetUp();
      
       // PAGE RELATED SCRIPTS
    
    
      
    })

    </script>
@stop


