@extends('layout.main')
@section('content')
 <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-push-4">
        <a href='#' class="nav-button up" style="margin: 20px auto;">
          <i class="fa fa-caret-up"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="text-align: right;">
        <a href='#' class="nav-button left" style="float: right;margin: 200px 50px 0 0;">
          <i class="fa fa-caret-left"></i>
        </a>
      </div>
      <div class="col-md-4" style="height: 489px;overflow: hidden;">
      	<ul class="list-inline">
      		@foreach ($users as $user)
  			<li class="col-md-12">
    			<h1>{{ $user->name }} <small>{{ $user->birth }}</small></h1>
    			<img src="{{ $user->avatar_link }}" width="100%;" height="400px;" alt="" class="thumbnail"/>
  			</li>
			@endforeach
		</ul>
   	  </div>
      <div class="col-md-4">
        <a href='#' class="nav-button" style="float: left;margin: 200px 0 0 50px;">
          <i class="fa fa-caret-right"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-push-4">
        <a href='#' class="nav-button down" style="margin: 50px auto;">
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
    </div>
  </div>
@stop
@section('script')
<script type="text/javascript">
  	$(function () {
  		var curIndex = 0, len = $('ul.list-inline > li').length;
  		var height = 489;
  		$(document).on('click', '.nav-button', function (e) {
  			e.preventDefault();
  			var $this = $(this);
  			if ($this.is('.up, .down')) {
  				var direction  = $this.is('.down') ? 1 : -1;
  				curIndex = curIndex + direction * 1;
	  			if (curIndex >= len) {
	  				curIndex = len-1;
	  				return ;
	  			} else if ( curIndex < 0 ) {
	  				curIndex = 0;
	  				return ;
	  			}
	  			var curMarginTop = $('.list-inline').css('margin-top') || 0;
	  			var newMarginTop = parseInt(curMarginTop) - direction * height;
	  			/*$('.list-inline').css({'margin-top':newMarginTop + 'px'});*/
	  			$('.list-inline').stop().animate({'margin-top':newMarginTop + 'px'}, 'fast');
	  			return ;
  			}
  			if ($this.is('.left')) {
  				$('body').toggleClass('highlight');
  				if ($('body').is(":not(.highlight)")) {
  					alert('I won\'t see this picture anymore');
  				}

  			}
  		})
  	});
  </script>
@stop