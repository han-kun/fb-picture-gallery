@extends('layout.main')

@section('content')

<script type="text/javascript">

  window.fbAsyncInit = function() {
  	FB.init({
    	appId      : '700063790060337',
    	cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    	xfbml      : true,  // parse social plugins on this page
    	version    : 'v2.0' // use version 2.0
  	});

	  // Now that we've initialized the JavaScript SDK, we call 
	  // FB.getLoginStatus().  This function gets the state of the
	  // person visiting this page and can return one of three states to
	  // the callback you provide.  They can be:
	  //
	  // 1. Logged into your app ('connected')
	  // 2. Logged into Facebook, but not your app ('not_authorized')
	  // 3. Not logged into Facebook and can't tell if they are logged into
	  //    your app or not.
	  //
	  // These three cases are handled in the callback function.

	/*FB.getLoginStatus(function(response) {
    	statusChangeCallback(response);
  	});*/
	$(function () {
  		$('#btnFBLogin').on('click', function () {
  			FB.login(function(response) {
  				if (response.authResponse) {
  					console.log('Welcome!  Fetching your information.... ');
  					FB.api('/me', function(response) {
              console.log(response);
  						$('#input_auth').val(JSON.stringify(response));
  						document.getElementById('frmSignin').submit();
  					});
  				} else {
  					console.log('User cancelled login or did not fully authorize.');
  				}
  			}, {scope: 'public_profile,email'});
  		})
  	});
  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

	<div class="container" style="text-align: center;">
		<br/><br/><br/>
		<a href='#' id="btnFBLogin">
			<img src="packages/img/fb-signin.png" height="50px" alt=""/>
		</a>
		<form id="frmSignin" action="{{ URL::route('account-signin') }}" method="post">
	        <input type="hidden" name="auth" id="input_auth" value=""/>
	    </form>
    </div> <!-- /container -->

@stop