@extends('layout.main')

@section('content')

	<div class="container">
    <div class="row">
      <div class="col-md-4 col-md-push-4">
        <a href='#' class="nav-button" style="margin: 20px auto;">
          <i class="fa fa-caret-up"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="text-align: right;">
        <a href='#' class="nav-button" style="float: right;margin: 200px 50px 0 0;">
          <i class="fa fa-caret-left"></i>
        </a>
      </div>
      <div class="col-md-4">
        <h1>Kun Han <small>31 years old</small></h1>
        <img src="https://scontent-a.xx.fbcdn.net/hphotos-xpf1/t1.0-9/10370983_303923573116552_4627640907652641658_n.jpg" width="100%;" height="400px;" alt="" class="thumbnail"/>
      </div>
      <div class="col-md-4">
        <a href='#' class="nav-button" style="float: left;margin: 200px 0 0 50px;">
          <i class="fa fa-caret-right"></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-push-4">
        <a href='#' class="nav-button" style="margin: 50px auto;">
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
    </div>
	</div>
@stop