
@extends('layouts.master')

@section('content')
<div class="col-lg-12">
	<div class="well well display-inline">
	
<div class="col-sm-12">
		<a href="./Ads" type="button" class="btn btn-primary btn-lg btn-block" title="Bu buton ile ilan yayımlanır">Create Ad</a>
	</div>
</div>
</div>
<div class="col-lg-12">
<div class="well well display-inline">

<div class="col-sm-12">
    <h3 class="txt-color-red">All ADS</h3>
    <a href="/allads" class="right btn btn-info btn-xs" style="margin-top:-45px;">See all ADS <i class="fa fa-angle-double-right"></i></a>

     
            @if($ads_info->count())

            <table class="table table-hover">
                 <thead>
                     <tr><th>Ads</th>
                         <th>Application</th>
                         <th>Ads Date</th>
                         <th>Deadline</th>
                         <th>Process</th>
                         <th>Delete</th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach($ads_info as $p)
                    <tr>
                      <td> {{ ucwords(Str::limit($p->ads_name, 18))}}</td>

                      <td> 5 </td>
                      <td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
                      <td>
                      @if($p->pub_time > 7)
                        <span class="label label-success">
                          {{ Carbon::createFromTimestamp(strtotime($p->created_at))->addDays($p->pub_time)->diffForHumans() }}
                        </span>
                        @else($p->pub_time < 7)
                        <span class="label label-warning">
                          {{ Carbon::createFromTimestamp(strtotime($p->created_at))->addDays($p->pub_time)->diffForHumans() }}
                        </span>
                        @endif
                      </td>
                      <td>
                      {{ link_to_route('adsInfo.edit', '', array($p->id), array('class' => 'btn btn-primary glyphicon glyphicon-pencil','title'=>'Edit') ) }}
                      {{ link_to_route('adsInfo.show', '', array($p->id), array('class' => 'btn btn-success glyphicon glyphicon-ok','title'=>'Show') ) }}
                      
                          
                      </td>
                      <td>
            {{ Form::open(array('method' => 'DELETE', 'route' => array('adsInfo.destroy', $p->id))) }}
            {{ Form::submit('Delete', array('title'=>'Delete','id' => 'smart-mod-eg1','class' => 'btn btn-danger btn-sm')) }}
            {{ Form::close() }}

          </td>
                    </tr>
                    @endforeach

                 </tbody>
             </table>
            @else
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Warning!</strong> You have not yet to publish ads.
            </div>
@endif
  </div>
  </div>
  </div>
  <div class="col-lg-12">
<div class="well well display-inline">
	<div class="col-sm-12">
    <h3 class="txt-color-red">Who Apply to ADS</h3>
    <a href="apply" class="right btn btn-info btn-xs" style="margin-top:-45px;"> See all Apply  <i class="fa fa-angle-double-right"></i></a>
    

  @if($all_apply->count())
            <table class="table table-hover">
                 <thead>
                     <tr><th>Ads</th>
                         <th>Name Surname</th>
                         <th>Ads Date</th>
                         <th>Go to Apply</th>
                         <th>Go to ADS</th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach($all_apply as $p)
                    <tr>
                      <td>{{ ucwords(Str::limit($p->ads_name, 18))}}</td>
                      <td>{{ucwords(Str::limit($p->birey_adi, 8))." ". ucwords(Str::limit($p->birey_soyadi, 8))}} </td>
                      <td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->pub_time))->diffForHumans() }}</span></td>
                      <td>
						<a href="apply/examine/{{$p->birey_id}}" class="btn btn-labeled btn-info btn-xs">
						 <span class="btn-label">
						 </>Examined
						  <i class="glyphicon glyphicon-arrow-right"></i>
						</a>                      
                      </td>
                      <td>
						<a href="adsInfo/{{$p->ads_id}}" class="btn btn-labeled btn-success btn-xs">
						 <span class="btn-label">
						 </>See ADS
						  <i class="glyphicon glyphicon-arrow-right"></i>
						</a>                      
                      </td>
                    </tr>
                    @endforeach

                 </tbody>    
             </table>
            @else
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                 You do not have any Apply..
            </div>
@endif
  </div>
  </div>
  </div>
<script type="text/javascript">
  $("#smart-mod-eg1").click(function(e) {
        $.SmartMessageBox({
          title : "Smart Alert!",
          content : "This is a confirmation box. Can be programmed for button callback",
          buttons : '[No][Yes]'
        }, function(ButtonPressed) {
          if (ButtonPressed === "Yes") {
    
            $.smallBox({
              title : "Callback function",
              content : "<i class='fa fa-clock-o'></i> <i>You pressed Yes...</i>",
              color : "#659265",
              iconSmall : "fa fa-check fa-2x fadeInRight animated",
              timeout : 4000
            });
          }
          if (ButtonPressed === "No") {
            $.smallBox({
              title : "Callback function",
              content : "<i class='fa fa-clock-o'></i> <i>You pressed No...</i>",
              color : "#C46A69",
              iconSmall : "fa fa-times fa-2x fadeInRight animated",
              timeout : 4000
            });
          }
    
        });
        e.preventDefault();
      })
</script>

@stop
